<?php
$ran=mt_rand(1,1000);
$name=$_POST["name"];
$represented=$_POST["represented"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$weight=$_POST["weight"];
$height=$_POST["height"];
$present_belt=$_POST["present_belt"];
$event=$_POST["event"];
$userdate=date('y-m-d');
$age=0;
$name=strtoupper($name);
$events="";
$i=1;
$target_path="../participant_images/".$name.$ran.".jpg";
foreach ($event as $e)
{
    if($i)
        {
            $events=$events.$e;
            $i=0;
        }
    else
    {
            $events=$events.','.$e;
    }
}
if(!empty($dob))
{
	$dobd=new DateTime($dob);
	$today=new DateTime('today');
	$age=$dobd->diff($today)->y;
}
echo "<html>
		<head>
			<title>TAEKWON-DO</title>
			<link rel=\"stylesheet\" href=\"../css/style.css\">
			<link rel=\"icon\" type=\"image/png\" href=\"../images/logo.png\">
		</head>
		<body>";
include 'connection.php';
if($con)
{
$query="select * from Tournament_2018 where REPRESENTED='$represented' and NAME='$name' and AGE=$age and GENDER='$gender' and WEIGHT=$weight and HEIGHT=$height and PRESENT_BELT_DAN='$present_belt';";
$retval=mysqli_query($conn,$query);
if(mysqli_num_rows($retval) == 0)
{
$query="INSERT INTO Tournament_2018(REPRESENTED, NAME, DOB, AGE, GENDER, WEIGHT, HEIGHT, PRESENT_BELT_DAN,PROFILE_IMAGE,EVENTS_PARTICIPATING) VALUES ('$represented','$name','$dob',$age,'$gender',$weight,$height,'$present_belt','$target_path','$events');";
$retval=mysqli_query($conn,$query);
if(!$retval)
{
	echo "<br/> unable to register report to the owner about the error";
	@mysqli_close($conn);
}
else
{
	echo "<div class=\"form-default-input\">registered successfully stick with the website to stay tuned..! thankyou</div>";
	$fnam=$_FILES['pic']['name'];
	if(isset($fnam))
	{
	if(move_uploaded_file($_FILES['pic']['tmp_name'],$target_path))
	{
	    echo "image uploaded successfully</br>";
	}
	}
	@mysqli_close($conn);
	echo'<br/><center><a class="aside-link" href="../"><input type="button" value="click to continue"></a></center>';
}
}
else
{
    echo "<h1>ENTRY ALREADY EXIST</h1>";
    @mysqli_close($conn);
}
}
echo "</body></html>";
?>
