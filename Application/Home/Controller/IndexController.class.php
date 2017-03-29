<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class IndexController extends Controller {


    public function index(){
        $this->view();
        $this->display();

    }
    public function  view(){

        $user=D('Post');
        $total=$user->select();
        $count=count($total);
        $pagesize =5;
        $page = $_GET['page'];
        if(empty($page)){
            $page = 1;
        }
        $begin = ($page - 1) * $pagesize;
        $pages = (int)($count / $pagesize);
        $pages = $count % $pagesize > 0 ? $pages + 1:$pages;
        $this->assign('page',$page);
        $this->assign('pages',$pages);
        $result=$user->limit($begin,$pagesize)->select();
        $this->assign('list',$result);
    }





}