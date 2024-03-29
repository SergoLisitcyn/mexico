<?php

namespace frontend\controllers;

use common\models\BlockManagement;
use common\models\Contacts;
use common\models\MainInfo;
use common\models\MainSolicita;
use common\models\MainTeam;
use common\models\Mfo;
use common\models\MfoText;
use common\models\ReviewInformation;
use common\models\Reviews;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\helpers\Json;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\HttpException;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $blocks = BlockManagement::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
        return $this->render('index', [
            'blocks' => $blocks,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Gracias por ponerse en contacto con nosotros. Le responderemos lo antes posible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionRedirect()
    {
        if(isset($_GET) && isset($_GET['r'])  && isset($_GET['url'])){
            $mfo = Mfo::find()->where(['url' => $_GET['url']])->one();
            return $this->render('redirect', [
                'redirect' => $_GET['r'],
                'mfo' => $mfo
            ]);
        }
        throw new HttpException(404, 'Страница не существует.');
    }

    public function actionReviewInformation()
    {
        $review = ReviewInformation::findOne(['url' != null]);
        return $this->render('review-information', [
            'review' => $review,
        ]);
    }

    /**
     * @throws HttpException
     */
    public function actionSolicita($url)
    {
//        if($url == 'p2p'){
//            $mfo = Mfo::find()->with('color')->where(['status' => 1,'type' => 'P2P'])->all();
//            $mfoText = MfoText::find()->where(['name' => 'Text'])->one();
//            return $this->render('p2p', [
//                'mfos' => $mfo,
//                'mfoText' => $mfoText->text_mfo['text'],
//            ]);
//        }
        $request = Yii::$app->request;
        $post = $request->post();
        $sum = 300;
        $term = 30;
        $isPost = false;
        if($post){
            $sum = $request->post('rs_sum');
            $term = $request->post('rs_term');
            $isPost = true;
        }
        $text = MainSolicita::find()->where(['url' => $url])->one();
        if(!$text){
            throw new HttpException(404, 'Страница не существует.');
        }

        $mfo = Mfo::find()->with('color')
            ->where(['status' => 1])
            ->andWhere(['!=', 'type', 'Broker'])
            ->all();
        if($url == 'corredores'){
            $mfo = Mfo::find()->with('color')->where(['status' => 1])->where(['type' => 'Broker'])->all();
        }
        $data = [];
        if($url == 'corredores'){
            foreach ($mfo as $key => $value){
                $data[$key] = [
                    'params' => $value
                ];
            }
        } else {
            foreach ($mfo as $key => $value){
                if(!isset($value['data']['pages'][$url]) || $value['data']['pages'][$url] == '-'){
                    continue;
                }
                $data[$value['data']['pages'][$url]] = [
                    'params' => $value
                ];
            }
        }

        ksort($data);
        $mfoText = MfoText::find()->where(['name' => 'Text'])->one();

        $render = 'solicita';
        if($url == 'p2p'){
            $render = 'p2p';
        }
        if($url == 'corredores'){
            $render = 'corredores';
        }
        $teams = MainTeam::find()->where(['status' => 1])->all();
        $i = 0;
        $haveTeam = false;
        if($teams){
            foreach ($teams as $team){
                if($team['array_url']){
                    if (in_array($url, $team['array_url'])){
                        $i++;
                    }
                }
            }
        }

        if($i > 0){
            $haveTeam = true;
        }
        return $this->render($render, [
            'mfos' => $data,
            'mfoText' => $mfoText->text_mfo['text'],
            'text' => $text,
            'sum' => $sum,
            'term' => $term,
            'isPost' => $isPost,
            'url' => $url,
            'haveTeam' => $haveTeam,
        ]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    public function actionProgressValue()
    {
        $info = MainInfo::findOne(['name' => 'progress']);
        if($info && $info->progress_value){
            $value = rand(0, 20);
            $sum = $info->progress_value + $value;
            $sum = (string)$sum;
            $info->progress_value = $sum;
            $info->work = Json::encode($info->work);
            $info->mission = Json::encode($info->mission);
            $info->save();
        }
    }
}
