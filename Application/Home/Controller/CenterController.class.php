<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/22
 * Time: 10:30
 */
namespace Home\Controller;
use Think\Controller;

class CenterController extends BaseController{

    public function center(){
        $user_id=$_SESSION['user_info']['user_id'];
        $options="user_id ='$user_id'";
        $user=D('Post');
        $total=$user->where($options)->select();
        $count=count($total);
        $pagesize =3;
        $page = $_GET['page'];
        if(empty($page)){
            $page = 1;
        }
        $begin = ($page - 1) * $pagesize;
        $pages = (int)($count / $pagesize);
        $pages = $count % $pagesize > 0 ? $pages + 1:$pages;
        $this->assign('page',$page);
        $this->assign('pages',$pages);
        $result=$user->where($options)->limit($begin,$pagesize)->select();
        $this->assign('list',$result);
        $this->display();
    }


    public function delete(){
        $id=$_GET['id'];
        $options="id = $id";
        $user=D('Post');
        $user->where($options)->delete();
        redirect('/index.php/Home/center/center');

    }

    public function detail(){
        date_default_timezone_set('PRC');
        $id=$_GET['id'];
        $options="id = $id";
        $user=D('Post');
        $result=$user->where($options)->select();
        $result=$result[0];
        $this->assign('list',$result);
        $post_id = $result["id"];
        $user_id=$_SESSION['user_info']['user_id'];
        $this->assign("post_id", $post_id);
        $this->assign("user_id", $user_id);
        $is_zan=0;
        $data=array();
        $data['post_id']=$post_id;
        $data['user_id']=$user_id;
        $u=D('Zan');
        $result=$u->where($data)->select();
        if($result){
            $is_zan=1;
        }
        $this->assign("is_zan", $is_zan);
        $this->display();

    }

    public function update(){
        $id=$_GET['id'];
        $options="id = $id";
        $user=D('Post');
        $result=$user->where($options)->select();
        $result=$result[0];
        $this->assign('list',$result);
        $this->display();

    }
    public function updateCheck(){
        $id=$_POST['id'];
        $title=$_POST['title'];
        $content=$_POST['content'];
        $options="id = $id";
        $data=array('title'=>$title,'content'=>$content);
        $user=D('Post');
        $user->where($options)->save($data);
        redirect('/index.php/Home/center/center');
    }


    public function post(){
        $this->display('center:post_add');
    }


    public function postadd(){
        $title=$_POST["title"];
        $content=$_POST["content"];
        if(empty($title) && empty($content)){
            echo "不能为空！";
        }else {
            $username = $_SESSION['user_info']['username'];
            $time = time();
            $data=array();
            $data['user_id']=$username;
            $data['title']=$title;
            $data['content']=$content;
            $data['time']=$time;
            $user=D('Post');
            $result=$user->addPost($data);
            if($result){
                $this->success('发布成功','/index.php/Home/center/center');
            }else{
                $this->error("发布失败",'/index.php/Home/center/post');
            }
        }
    }
    public function zan(){

        $post_id= I("post.post_id");
        $user_id= I("post.user_id");
        $data=array();
        $data['post_id']=$post_id;
        $data['user_id']=$user_id;
        $user = D('Zan');
        $result = $user->zanAdd($data);
        $info = array();
        if($result){
            $info["status"] = 1;
            $info["info"] = "点赞成功！";
            $this->ajaxReturn($info);
        } else {
            $info["status"] = 0;
            $info["info"] = "点赞失败！";
            $this->ajaxReturn($info);
        }
    }

    public function test(){
        $i=I("post.i");
        if($i==1){
            $info=array('武器1','武器2','武器3','武器4','武器5');
        }else{
            $info=array('武器1','武器2');
        }

        $this->ajaxReturn($info);
    }





    public function out(){
        session_start();
        $_SESSION['user_info']=null;
        redirect('/index.php/Home/index/index');
    }



}