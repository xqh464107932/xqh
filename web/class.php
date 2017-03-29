<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/4
 * Time: 10:55
 */

include_once "./config.php";

class SqlConnect{

    private $_table;

    function __construct($table=""){
        $this->_table = $table;

    }

    function table($table){
        $this->_table = $table;
        var_dump($table);
        return $this;
    }

    /**
     *
     * @param $data key对应表的字段名 value为对应字段的值的数组
     * @return bool
     */
    function add($data){
        $keys = array();
        $values = array();
        foreach($data as $key=>$value){
            $keys[] = $key;
            $values[] = "'$value'";
        }
        $keys = implode(",", $keys);
        $values = implode(",", $values);

        $icon=mysql_connect(DB_URL,DB_USER,DB_PWD);
        if($icon){
            mysql_select_db(DB_DB,$icon);
            $result=mysql_query("INSERT INTO ".$this->_table."($keys) VALUES ($values)");

            return $result;
        } else {
            return false;
        }
    }

    function select($where){
        if(!empty($where))
            $where = "where $where";
        else
            $where = "";

        $icon=mysql_connect(DB_URL,DB_USER,DB_PWD);
        if($icon) {
            mysql_select_db(DB_DB, $icon);
            $sql= "select * from " . $this->_table . " $where ";
            var_dump($sql);
            $result = mysql_query($sql);

            $list = array();
            while($row = mysql_fetch_array($result)){
                $list[] = $row;
            }
            return $list;
        }else{
            return false;
        }
    }

    function update($data,$where){
        if(!empty($where))
            $where = "  where $where";
        else
            $where = "";

        $update = array();
        foreach($data as $key=>$value){
            $update[] = $key."=". "'$value'";
        }
        $update = implode(",", $update);
        $icon=mysql_connect(DB_URL,DB_USER,DB_PWD);
        if($icon) {
            mysql_select_db(DB_DB, $icon);
            $sql="update  $this->_table  set $update $where";

            $result=mysql_query($sql);
            return $result;
        }else{
            return false;
        }
    }

    /**
     * @param $where
     * @return bool
     */
    function delete($where){
        if(!empty($where))
            $where = "  where $where";
        else
            $where = "";
        $icon=mysql_connect(DB_URL,DB_USER,DB_PWD);
        if($icon){
            mysql_select_db(DB_DB,$icon);
            $a="delete from ".$this->_table .$where;

            $result=mysql_query($a);

        }else{
            return false;
        }
    }


}