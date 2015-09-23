<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include("connect.php");

$mysqld= "TRUNCATE  TABLE  thu ";
mysql_query($mysqld);

$filename = "data.json";
$json_string = file_get_contents($filename);
//echo print_r($json_string,true);  //打印文件的内容
//echo "<br>";
 $obj=json_decode($json_string);
// print_r($obj);

$max=sizeof($obj->posts);
//echo $max;
for($i=0;$i<$max;$i++)
{

 $message = $obj->posts[$i]->message."<br>";
 $link = $obj->posts[$i]->actions[0]->link."<br>";
 $comments = $obj->posts[$i]->comments->summary->total_count."<br>"; 
 $likes = $obj->posts[$i]->likes->summary->total_count."<br>";

 $message = nl2br($message);
 $topic = mb_split("<br />",$message); 
 
 /*陣列計算*/
 $topic_count = count($topic);
 $time = $topic[$topic_count-3];
 $other = '';
 $short_message = '';

/*內文去標頭*/ 
/*
for($j=1;$j<$topic_count;$j++)
{
 $short_message=$short_message.$topic[$j];	
}
*/
/*時間及其他雜務*/
for($s=$topic_count-3;$s<$topic_count;$s++)
{
 $other=$other.$topic[$s]; 
}
print_r( $other);
// print_r($short_message);
// echo $link;
// echo $comments; 
// echo $likes;
// echo $time;

/*SQL存入*/
$mysql= " INSERT INTO `thu`(`topic`, `message`, `time`, `link`, `comments`, `likes`) VALUES ('$topic[0]','$message','$other','$link','$comments','$likes') ";
mysql_query($mysql);
}
//var_dump($obj);
?>
