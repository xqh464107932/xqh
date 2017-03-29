<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/21
 * Time: 16:50
 */
namespace Home\Model;
use Think\Model;
class UserModel extends Model{

    /**]
     * 增加会员
     * @param $data
     */
    public function  addUser($data){

        $result = $this->add($data);
        return  $result;
    }

    public function selectUser($options){

        $result=$this->where($options)->select();
        return $result;
    }


}