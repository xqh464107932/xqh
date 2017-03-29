<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/24
 * Time: 14:58
 */
namespace Home\Model;
use Think\Model;
class ZanModel extends Model{

    public function zanAdd($data){
        $result = $this->data($data)->add();
        return  $result;

    }
}