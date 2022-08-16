<?php
namespace backend\models;

use yii\base\Model;
use common\models\User;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $password_repeat;
    public $role;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Пользователь с таким username уже существует'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Такой e-mail уже существует.'],
            ['role', 'string', 'max' => 255],
            ['password', 'required'],
            ['password', 'string', 'min' => 3],
            ['password_repeat', 'required'],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>"Пароли не совпадают" ],


        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     * @throws \Exception
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();

            $user->username = $this->username;
            $user->email = $this->email;
            $user->status = 10;

            if($this->role == 'manager'){
                $user->role = 'manager';
            } else {
                $user->role = 'client';
            }
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $auth = Yii::$app->authManager;
            $userRole = $auth->getRole($user->role);
            if ($user->save() && $auth->assign($userRole, $user->id)) {
                return $user;
            }
        }

        return null;
    }
}
