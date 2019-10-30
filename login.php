<?php
session_start();
include ("db.php");
include ("headfile.html");

$pagename="Login";
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>".$pagename."</title>";
echo "<h2>".$pagename."</h2>";

echo "
		<form method=POST action=getlogin.php>
			<table>
				<tr>
					<td>Email</td>
					<td><input type=text name=email placeholder='Email Address'></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type=password name=password placeholder=Password></td>
                </tr>
                <tr>
					<td><input type=submit value=Login></td>
					<td><input type=reset value='Clear Form'></td>
				</tr>
            </table>
        </form>
    ";


include("footfile.html");
?>
