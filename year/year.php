<?php
  if($_POST){
  	 $year = $_POST['year'];
  	 if(($year%4==0&&$year%100!=0)||$year%400==0){
  	 	 echo '闰年';
  	 }else{
         echo '平年';
  	 }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>year</title>
</head>
<body>
     <form action="" method="post">
   	  <input type="number" name="year"/>
   	  <input type="submit" >
   </form>
</body>
</html>