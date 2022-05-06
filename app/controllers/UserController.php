<?
namespace app\controllers;
use app\controllers\AppController;
use app\models\User;
use fw\core\base\View;

class UserController extends AppController{

    public function signupAction(){
        if(!empty($_POST)){
            $user = new User;
            $data = $_POST;
            $user->load($data);
            if(!$user->validate($data) || $user->checkUnique()){
                echo "No VAL";
                $user->getErrors();
                redirect();
            }
            $user->attributes['password'] = password_hash($user->attributes['password'],PASSWORD_DEFAULT);
            if($user->save('user')){
                $_SESSION['success'] = 'Вы успешно зарегистрировались!';
            }else{
                $_SESSION['error'] = 'Error';
            }
            redirect();
           
        }
        //echo 123;die;
        View::setMeta("Регистрация");
    }

    public function loginAction(){

    }

    public function logoutAction(){

    }

}