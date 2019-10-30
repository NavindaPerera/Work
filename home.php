<?php
session_start();
include ("db.php");
$pagename="Index";
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>".$pagename."</title>";
include ("headfile.html");
include ("detectlogin.php");

echo "<h2>".$pagename."</h2>";
echo "<p> Amazing products for your home, for your work, for you! <br><br><hr>";

$SQL="SELECT prodId, prodName, prodPicName, prodPrice FROM product";

$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));

while ($arrayprod=mysqli_fetch_array($exeSQL)) {
	echo "<br>";
	echo "<p><a href=prodinfo.php?u_prodid=".$arrayprod['prodId'].">";
	echo $arrayprod['prodName']."<br>";
	echo "</a>";
	echo "<br>";
	echo '<img src="./images/' . $arrayprod['prodPicName'] . '">';
	echo "<br><br><p>&#163; {$arrayprod['prodPrice']} </p>";
	echo "<br>";
	echo "<hr>";
}

include("footfile.html");
?>
