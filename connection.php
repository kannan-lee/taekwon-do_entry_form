<?php
$con=0;
$shost='localhost';
$suser='id5551468_kannan';
$spass='kannankannan';
$sdb='id5551468_taekwon_do';
$conn=mysqli_connect($shost,$suser,$spass,$sdb);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else {
      echo"<h1>&#10003;</h1>";
      $con=1;
  }
/*
$shost='localhost';
$suser='kannan';
$spass='kannan';
$sdb='taekwon_do';
extension=php_mysql.dll;
$conn=mysql_connect($shost,$suser,$spass);
if(!$conn)
{
	die('try again... <script type="text/javascript">alert("failed to connect to server try again");</script>');
	$con=0;
}
else
	{
	if(!@mysql_select_db($sdb,$conn))
	{	
		die('try again...<script type="text/javascript">alert("failed to connect to database try again");</script>');
		$con=0;
	}
		echo"<h1>CONNECTION SUCCESSFUL</h1>";
		$con=1;
}*/
?>