<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/22
 * Time: 11:09
 */
namespace Home\Controller;
use Think\Controller;

/**
 *
 * Class BaseController
 * @package Home\Controller
 */

class BaseController extends Controller{

    protected function _initialize(){
        if(empty($_SESSION['user_info'])){
            redirect('/index.php/Home/login/login');
            exit;
        }

}

    protected function _initialize1(){


    }


}