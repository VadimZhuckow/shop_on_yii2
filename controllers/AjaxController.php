<?php
namespace app\controllers;

use app\models\db\Categories;
use app\models\db\Companys;
use app\models\Encryption;
use app\models\LoginForm;
use app\models\projectmail\ProjectMailer;
use app\models\User;
use Yii;
use yii\web\Controller;

class AjaxController extends Controller
{
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;

        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        exit;
    }

    /**
     * Обработчик регистрации
     *
     * @return bool|string
     */
    public function actionRegister()
    {
        // ловим ошибки
        if ($_GET['login']) {
            $login = htmlspecialchars($_GET['login']);
        } else {
            return 'err_login';
        }
        if ($_GET['password']) {
            $pass = htmlspecialchars($_GET['password']);
        } else {
            return 'err_pass';
        }
        if (!self::userNameIsMail($login)) {
            return 'login_no_email';
            exit;
        }
        if (self::checkUserName($login)) {
            return 'user_already_exists';
            exit;
        }

        // если ошибок нет - регистрируем
        $new_user                     = new User;
        $new_user->email              = $login;
        $new_user->password_hash      = md5($pass);
        $rand_auth_key                = md5(rand(100, 99999));
        $new_user->auth_key           = $rand_auth_key;
        $new_user->status             = '10'; // 5 - зарегистрирован, но не подтвержден. 10 - подтвержден, активен
        $new_user->city               = '2';
        $new_user->created_at         = '1';
        $new_user->updated_at         = '1';
        $new_user->type               = '1';

        if ($new_user->save()) {
            return true;
        }

        return 'error';
    }

    /**
     * Обработчик авторизации
     *
     * @return bool|string
     */
    public function actionLogin()
    {
        if ($_GET['login']) {
            $login = htmlspecialchars($_GET['login']);
        } else {
            return 'err_login';
        }
        if ($_GET['pass']) {
            $pass = htmlspecialchars($_GET['pass']);
        } else {
            return 'err_pass';
        }

        // получаем логин и пароль, проверяем, авторизируем, если все ок
        $login_form = new LoginForm;
        $login_form->load(Yii::$app->request->get());
        $login_form->username = $login;
        $login_form->password = $pass;

        if ($login_form->login()) {
            return true;
        }

        return 'wrong_pass';
    }

    /**
     * Проверка, зарегистрирован ли уже такой аккаунт
     *
     * @param $u_name
     *
     * @return bool
     */
    private static function checkUserName($u_name): bool
    {
        $user = User::find()
            ->where(['email' => $u_name])
            ->one();
        if ($user) {
            return true;
        }

        return false;
    }

    /**
     * Проверка, является ли введенный логин почтой
     *
     * @param $u_name
     *
     * @return bool
     */
    private static function userNameIsMail($u_name): bool
    {
        if (preg_match("/[0-9a-z]+@[a-z]/", $u_name)) {
            return true;
        }

        return false;
    }
   
}