<?php
namespace app\models;

use app\models\db\Customer;
use Yii;
use yii\base\Model;

/**
 * Форма авторизации
 * @package app\models
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;
    private $_user = false;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [
                [
                    'username',
                    'password',
                ],
                'required',
            ],
            [
                ['customer'],
                'safe',
            ],
            [
                'rememberMe',
                'boolean',
            ],
            [
                'password',
                'validatePassword',
            ],
        ];
    }

    /**
     * @param $attribute
     * @param $params
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * @return bool
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        }

        return false;
    }

    /**
     * @return User|bool|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
        ];
    }
}
