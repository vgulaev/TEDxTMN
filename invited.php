<?php
$currentmenuitem = "3";
require("head.php");
require("sett.php");

$mysqli = new mysqli( $dbs, $dbl, $dbp, $dbn );
if (mysqli_connect_errno()) {
    printf( "Connect failed: %s\n", mysqli_connect_error() );
    exit();
}
?>
<br>
<div id = "maincontainer" class="container">
    <p>
    <table border=3 style="table-layout: fixed; width: 100%" rules="all">
        <?$result = $mysqli->query("select * from userinv;");
        while ($row = $result->fetch_row()) {
            echo("<tr>");
            echo '<td width="5%"  align="center">'.$row[0].'</td>';
            echo '<td align="center">'.$row[1].'</td>';
            echo '<td align="center">'.$row[2].'</td>';
            echo '<td align="center">'.$row[3].'</td>';
            echo '<td align="center">'.$row[4].'</td>';
            echo("</tr>");
        }?>
    </table>
</div>
<?php
require("footer.php");
?>