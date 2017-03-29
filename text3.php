<?php
    echo 'hello xqh!';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>

    <script type="text/javascript">
        alert('hello word!');
    </script>

    <style type="text/css" >
        body{
            background:<?php echo 'red'?>;
        }
    </style>
</head>
<body>

       <h1>this is test</h1>
       <?php echo '<hr/>';?>
       <h2>111</h2>
       <?php echo 'WELCMOE BABY!';
         echo '<hr/>';
         $name='xqh';
         echo '姓名：';
         echo $name;

         echo '<hr/>';
         $i=1;
         $j=&$i;
         echo $j;
         echo '<hr/>';
         $j=88;
         echo '<hr/>';
         echo $i;
         unset($i);
         echo $i;
         echo '<hr/>';
         $int=100;
         var_dump($int);
         echo '<hr/>';
         $float=1.2;
         var_dump($float);
         echo '<hr/>';
         $bool=true;
         $bool1=false;
         var_dump($bool,$bool1);
         echo '<hr/>';
         $string='xuqiuhai';
         var_dump($string);
         echo '<hr/>';
         $array=array();
         var_dump($array);
         echo '<hr/>';
         $object=new stdClass();
         var_dump($object);
         echo '<hr/>';
         $handle=fopen('two.php','r');
         var_dump($handle);
         echo '<hr/>';
         $i=1;
         for($i=1;$i<=10;$i++){
             //if($i>10){
               //  break;

            // }
             echo $i,'<br/>';
         }

         for($i=1;$i<=5;$i++){
             echo '外层循环第'.$i.'次<br/>';
             for($j=1;$j<=4;$j++){
                 echo '内层循环第'.$j.'次<br/>';


             }
            echo '<hr/>';

         }


       ?>


</body>
</html>