<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/22
 * Time: 10:44
 */
namespace Home\Model;
use Think\Model;
class NewsModel extends Model {
    protected $_scope = array(
        // 命名范围normal
        'normal'=>array(
            'where'=>array('status'=>1),
        ),
        // 命名范围latest
        'latest'=>array(
            'order'=>'create_time DESC',
            'limit'=>10,
        ),
    );
}
