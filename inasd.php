
<html>
<link rel="stylesheet" href="index.css">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes">

<title>
    bff
</title>

</head>
<body>

<form method="post" action="#">
<p>write somthing</p>
<input type="text" name="name"><br>

<input type="submit" name="run" value="send">

</form>

<?php
$servername="localhost";
$username="id19376861_omar";
$password="Omar23klslahfue32_";
$dbname="id19376861_bff";




$con=new mysqli($servername,$username,$password,$dbname);
$sql = "select * from chats";
$result = $con->query($sql);
$name=$_POST["name"];

date_default_timezone_set("Asia/Riyadh");
$da=date("Y/m/d-").date("h:i:sa");

if(isset($name)){

if(empty($name))

echo("<p>write somthing bh</p>");

else if($name=="24/10/2021")
echo("<p>hey manasik <3</p>");

else if($name=="bilal")
echo ("<p>fk u _|_</p>");

else if($name=="omar321"){
echo("<table>");
echo("<tr>
<th>chat</th>
<th>date</th>
</tr>");
   while($row = $result->fetch_assoc()) {
echo('<tr>
<td>'. $row["chat"].'</td>'.
'<td>'. $row["dae"].'</td>'.
'</tr>'); 
}
echo("</table>");

}

else{
  $result=mysqli_query($con,"insert into chats(chat,dae)VALUES('$name','$da')");
  echo("<p>no one cares</p>");
  }
}


?>

</body>
</html>
