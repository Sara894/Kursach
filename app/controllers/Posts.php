<?
namespace app\controllers;

use vendor\core\base\Controller;

class Posts extends Controller{
    public function indexAction(){
        echo "Posts::indexAction";
    }

    public function testAction(){
        echo "Posts::testAction";
    }
}