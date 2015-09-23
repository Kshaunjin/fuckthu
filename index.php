<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>靠北東海神器</title>
<script src="js/main.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/main.css">

<script type='text/javascript' src='//font.arphic.com/FontSubsetOutput/1442110881186/9CD533F592C08C8192053C7FB1F565A6/1442110881186.JS?4694555498'></script>

</head>
<body>
 <div class="page" id="pageOne">
  <div class="container">
   <div class="center">
<h1 style="text-align: center" class="animated fadeIn">靠北東海神器</h1>

<form action="index.php#head " method="post"  class="form-horizontal" >
<div class="form-group">
<label class="col-md-4 text-right "  for="topic"><h1></h1></label>
<div class="col-lg-4 input-group input-group-lg" >
     <span class="input-group-addon">靠北東海#</span>
     <input type="text"   name="topic" placeholder="文章編號" class="form-control input-md" />
    <span class="input-group-btn">
    <button type="submit" name="submit" class="btn btn-info btn-flat "/>送出</button>
    </span>
    </div>    
</div>

</div>
</div>
  </div>
</form>

</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.4&appId=684840644994341";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="left-bottom-corner">
<a href="https://www.facebook.com/FcukUthu"><img class='fuckthulogo col-md-3 col-sm-8 col-xs-12' src='images/kao.png'></a>
</div>

<div  class="animated fadeIn" id="downMessage" style="position: absolute; left: 50%; bottom:0; padding: 10px 10px 10px 10px;"><div style="position: relative; left: -50%; text-align:center">更多靠北<br><i class="fa fa-chevron-down"></i></div></div>
          
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
<script src="js/main.js"></script>
</html>


<div class="page" id="pageTwo">
<form action="index.php#head " method="post"  class="form-horizontal" >

<div class="page-header" id="head">

<nav class="navbar navbar-default navbar-inverse navbar-static-top " >
<div class="container">
   <div class="navbar-inner" >

							   </div>
							   </div>
							   </nav>

<div class="row">
          <div class="col-md-3 col-sm-3 col-xs-3"></div>
	            <div class="col-md-8 col-sm-8 col-xs-8">
		    &nbsp;&nbsp;
<input type="button" name="rightnow" value="立馬靠北" onclick="location.href='http://ppt.cc/NiMlb'" class="btn btn-primary btn-lg"/>
<input type="submit" name="likesorder" value="讚數排序" class="btn btn-primary btn-lg"/>
<input type="submit" name="commentsorder" value="評論排序" class="btn btn-primary btn-lg"/>
<input type="submit" name="today" value="今日靠北" class="btn btn-primary btn-lg"/>
<input type="submit" name="happend" value="一週大事" class="btn btn btn-danger btn-lg"/>
</form>
</div></div>
</div>
<?php
include("connect.php");

$date = date('m/d/Y') ;
$dateb1 = date('m/d/Y', strtotime('-1 day'));
$dateb2 = date('m/d/Y', strtotime('-2 day'));
$dateb3 = date('m/d/Y', strtotime('-3 day'));
$dateb4 = date('m/d/Y', strtotime('-4 day'));
$dateb5 = date('m/d/Y', strtotime('-5 day'));
$dateb6 = date('m/d/Y', strtotime('-6 day'));


//查詢標題
if ( isset($_POST['topic']) && $_POST['topic'] != '') 
{
  $topic= $_POST['topic'];
  $topic=mysql_real_escape_string($topic);
  $topic='#靠北東海'.$topic;
  $sql= " SELECT `topic`,`message`,`likes`,`comments`,`link` FROM `thu` WHERE `topic` =  '$topic'";
  $conn=mysql_query($sql);

  while($row=mysql_fetch_array($conn))
  {
     echo "
     	  <div class=\"row\">
          <div class=\"col-md-3 col-sm-3 col-xs-3\"></div>
	  <div class=\"col-md-8 col-sm-8 col-xs-8\">
	  <div class=\"container-fluid\">
	  <div class=\"well post\">
	  
	  <a href=\"$row[4]\" target=\"_blank\">
	  <h3>$row[0]</h3>
	  </a>
	  <p>$row[1]</p>
	  <div class=\"col-md-2 col-sm-2 col-xs-4\">
	  <p id=\"likeInfo\">
	  <i class=\"fa fa-thumbs-up\"></i> $row[2] &nbsp;&nbsp;
	  </div>
	  <div class=\"col-md-2 col-sm-2 col-xs-4\">
	  <i class=\"fa fa-comment\"></i> $row[3]
	  </div>
	  </p>
	  </div>
	  </div>
	  </div>
	  </div>
	  ";


  }
}


//查詢時間
if ( isset($_POST['time']) && $_POST['time'] != '')
{
  $time= $_POST['time'];
  $time=mysql_real_escape_string($time);
  
  $sql="SELECT `topic`,`message`,`likes`,`comments`,`link` FROM `thu` WHERE `time` like '%$time%'";
  $conn2=mysql_query($sql);
  
  while($row=mysql_fetch_array($conn2))
  {
    echo "
	  <div class=\"row\">
	  <div class=\"col-md-3 col-sm-3 col-xs-3\"></div>
	  <div class=\"col-md-8 col-sm-8 col-xs-8\">
	  <div class=\"container-fluid\">
	  <div class=\"well post\">
	  <a href=\"$row[4]\" target=\"_blank\">
          <h3>$row[0]</h3>
          </a>
          <p>$row[1]</p>
          <div class=\"col-md-2 col-sm-2 col-xs-4\">
          <p id=\"likeInfo\">
          <i class=\"fa fa-thumbs-up\"></i> $row[2] &nbsp;&nbsp;
          </div>
          <div class=\"col-md-2 col-sm-2 col-xs-4\">
          <i class=\"fa fa-comment\"></i> $row[3]
          </div>
          </p>
          </div>
          </div>
          </div>
	  </div>
         ";
  }
}


//一週大事
if ( isset($_POST['happend']) && $_POST['happend'] != '')
{

$sql= "SELECT `topic`,`message`,`likes`,`comments`,`link` FROM `thu` WHERE `time` like   '%$date%' or `time` like '%$dateb1%' or `time` like '%$dateb2%'or `time` like '%$dateb3%' or `time` like '%$dateb4%' or `time` like '%$dateb5%' or `time` like '%$dateb6%' ORDER BY `likes` DESC limit 5 ";
$conn=mysql_query($sql);
while($row=mysql_fetch_array($conn))
  {

       echo "
	<div class=\"row\">
	<div class=\"col-md-3 col-sm-3 col-xs-3\"></div>
	<div class=\"col-md-8 col-sm-8 col-xs-8\">
	<div class=\"container-fluid\">
	<div class=\"well post\">
	<a href=\"$row[4]\" target=\"_blank\">
	<h3>$row[0]</h3>
	</a>
	<p>$row[1]</p>
	<div class=\"col-md-2 col-sm-2 col-xs-4\">
	<p id=\"likeInfo\">
	<i class=\"fa fa-thumbs-up\"></i> $row[2] &nbsp;&nbsp;
	</div>
	<div class=\"col-md-2 col-sm-2 col-xs-4\">
	<i class=\"fa fa-comment\"></i> $row[3]
	</div>
	</p>
	</div>
	</div>
	</div>
	</div>
	";
  }
}


//按讚數排序
if ( isset($_POST['likesorder']) && $_POST['likesorder'] != '')
{

$sql= "SELECT `topic`,`message`,`likes`,`comments`,`link` FROM `thu`  ORDER BY `likes` DESC limit 30 ";
$conn=mysql_query($sql);
while($row=mysql_fetch_array($conn))
  {
	 echo "
         <div class=\"row\">
         <div class=\"col-md-3 col-sm-3 col-xs-3\"></div>
         <div class=\"col-md-8 col-sm-8 col-xs-8\">
	 <div class=\"container-fluid\">
         <div class=\"well post\">
	 <a href=\"$row[4]\" target=\"_blank\">
	 <h3>$row[0]</h3>
	 </a>
	 <p>$row[1]</p>
         <div class=\"col-md-2 col-sm-2 col-xs-4\">
	 <p id=\"likeInfo\">
	 <i class=\"fa fa-thumbs-up\"></i> $row[2] &nbsp;&nbsp;
	 </div>
	 <div class=\"col-md-2 col-sm-2 col-xs-4\">
	 <i class=\"fa fa-comment\"></i> $row[3]
	 </div>
	 </p>
	 </div>
	 </div>
	 </div>
	 </div>
	 ";
  }
        
}

//評論數排序
if ( isset($_POST['commentsorder']) && $_POST['commentsorder'] != '')
{

$sql= "SELECT `topic`,`message`,`likes`,`comments`,`link` FROM `thu`  ORDER BY `comments` DESC limit 30 ";
$conn=mysql_query($sql);
while($row=mysql_fetch_array($conn))
  {

	   echo "
		<div class=\"row\">
	        <div class=\"col-md-3 col-sm-3 col-xs-3\"></div>
		<div class=\"col-md-8 col-sm-8 col-xs-8\">
		<div class=\"container-fluid\">
	        <div class=\"well post\">
		<a href=\"$row[4]\" target=\"_blank\">
		<h3>$row[0]</h3>
		</a>
		<p>$row[1]</p>
		<div class=\"col-md-2 col-sm-2 col-xs-4\">
		<p id=\"likeInfo\">
		<i class=\"fa fa-thumbs-up\"></i> $row[2] &nbsp;&nbsp;
		</div>
		<div class=\"col-md-2 col-sm-2 col-xs-4\">
		<i class=\"fa fa-comment\"></i> $row[3]
		</div>
		</p>
		</div>
		</div>
		</div>
		</div>
		";

  }
}

if ( isset($_POST['today']) && $_POST['today'] != '')
{
  $sql= "SELECT `topic`,`message`,`likes`,`comments`,`link` FROM `thu` WHERE `time` like '%$date%' ORDER BY `likes` limit 100";
  $conn=mysql_query($sql);
  while($row=mysql_fetch_array($conn))
       {
        echo "
        <div class=\"row\">
	<div class=\"col-md-3 col-sm-3 col-xs-3\"></div>
	<div class=\"col-md-8 col-sm-8 col-xs-8\">
	<div class=\"container-fluid\">
	<div class=\"well post\">
	<a href=\"$row[4]\" target=\"_blank\">
        <h3>$row[0]</h3>
        </a>
        <p>$row[1]</p>
        <div class=\"col-md-2 col-sm-2 col-xs-4\">
        <p id=\"likeInfo\">
        <i class=\"fa fa-thumbs-up\"></i> $row[2] &nbsp;&nbsp;
        </div>
        <div class=\"col-md-2 col-sm-2 col-xs-4\">
        <i class=\"fa fa-comment\"></i> $row[3]
        </div>
        </p>
        </div>
        </div>
        </div>
	</div>
        ";
       }
}
echo "<div class=\"row\"><footer>
    <div class=\"col-xs-12 col-sm-12 col-md-12 text-center\">
            <h6><a href=\"http://nmg.cs.thu.edu.tw\">NMG</a> all rights reserved</h6>
	            <h6>Designed by <a href=\"http://jinzz.me\">JiNkz</a></h6></div>
		        </footer>
			</div>";
?>
</div>
