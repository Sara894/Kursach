<?

namespace app\controllers\admin;

use fw\core\base\View;

class UserController extends AppController{
    public $layout = 'default';
    public function indexAction(){
        debug($this->route);
        View::setMeta('Admin','admin panel','admin page');
      /*   $test = "Testovaya ";
        $data = [
            'test',
            2
        ];
        $this->set([
            'test'=>$test,
            'data'=>$data
        ]);
        echo __METHOD__; */
    }

    public function loginAction(){
        echo 12222;
    }

    public function testAction(){
        echo __METHOD__;
    }
}