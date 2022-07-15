<?php
$name = $_POST['name'];
$email= array();
$email[0] = $_POST['email'];
$text = $_POST['message'];
if(isset($_FILES['formFile'])){

$file = $_FILES['formFile'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
echo $name;
echo $email[0];
echo $text;
if(isset($file)){
$myfile=fopen($file["tmp_name"], 'r')or die("Unable to open file!");
echo fread($myfile,filesize($file["tmp_name"]));
fclose($myfile);

}
?>
</body>
</html>