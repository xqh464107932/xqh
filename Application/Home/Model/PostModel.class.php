<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/22
 * Time: 17:29
 */
namespace Home\Model;
use Think\Model;
class PostModel extends Model{

    public function addPost($data){
        $result = $this->data($data)->add();
        return  $result;

    }
}