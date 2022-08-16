<?php
namespace backend\models;

use yii\base\Model;
use common\models\User;

/**
 * Change password form
 */
class ChangePassword extends Model
{
    public $user_id;
    public $password;
    public $password_repeat;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['user_id', 'required'],
            ['user_id', 'integer'],
            ['password', 'required'],
            ['password', 'string', 'min' => 3],
            ['password_repeat', 'required'],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>"Passwords don't match" ],
        ];
    }

    /**
     * Change password
     *
     * @return true the saved model or false if saving fails
     */
    public function changePassword()
    {
        if (!$this->validate()) {
            return null;
        }
        $user = User::findOne($this->user_id);
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save();
    }
}
