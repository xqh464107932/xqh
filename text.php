<?php//echo 'hello world';//phpinfo();//$str=file_get_contents('./1xqh.txt');//echo $str;header('content-type:text/html;charset=utf-8');////$str = file_put_contents("./ttt.txt",  "this is test");////$str = file_get_contents("./1.pngddd");//echo $str;//$h1 = substr($str,0,5);//$h2 = substr($str,6,2);//$file_content = substr($str,8,$h2);//file_put_contents($name, $file_content);$patern="http://www.jd.com        https://tmall.com        http://yihaodian.com        https://phpfalimy.org";$p="#(?:http|https)://\w+\.\w+(?:\.\w+)*#";if(preg_match_all($p,$patern,$match)){    echo "找到了";    echo "<pre>";    print_r($match);    echo "</pre>";}else{    echo"没找到";}foreach($match[0] as $val){    $patern=str_replace($val,"<a href='{$val}'>{$val}</a></br>",$patern);}echo $patern;echo "<br/>";$subject="2016-12-12";$pattern="#(\d{4})-(\d{2})-(\d{2})#";$replacement='$1年$2月$3日';$subject=preg_replace($pattern,$replacement,$subject);print_r($subject);echo "<br/>";$subject='a=1;b=2;c=3';$callback=function($match){    return $match[0] * 5;};$subject=preg_replace_callback('#(\d+)#',$callback,$subject);echo $subject;$filename='http://phpfamily.org/';$data=file_get_contents($filename);file_put_contents('1.txt',$data);$subject=file_get_contents('1.txt');$subject=preg_replace('#\n[\s|]*\r#',null,$subject);file_put_contents('2.txt',$subject);echo "<br/>";$subject='2333.168.9.9';$pattern='#^2\d{2}\.\d{3}\.[0-9]\.[0-9]$#';if(preg_match($pattern,$subject,$match)){    echo "合法";    echo "<pre>";    print_r($match);    echo "</pre>";}else{    echo "不合法";}//$subject1=file_get_contents('http://phpfamily.org/');//$pattern = '#<img alt="(.*)" src="(.*)" >#';//preg_match_all($pattern,$subject,$match);//print_r($match);//$path = "./ttt.txt";////$handler = fopen($path, "r");//$old = fread($handler,filesize($path));//echo "old : $old";//echo "<br/>";//fclose($handler);////$handler = fopen($path, "a+");//fwrite($handler, "  this is new");//fclose($handler);////$str=file_get_contents($path);//echo "new : $str";////$index_path = "./index.chace";//if(file_exists($index_path)){//    $content = file_get_contents($index_path);//    echo $content;//    exit;//}//////''''''////ob_start();//echo "12312";//echo "2343534543";////$content = ob_get_contents();//ob_get_clean();////echo $content;////