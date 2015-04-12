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
    <table border=3 style="table-layout: fixed; width: 100%; font-weight:500" rules="all">
        <?php
        $result = $mysqli->query("select * from userinv;");
        $q=1;
        echo('<tr>');
        echo '<td style="border-bottom-width: 3px; border-left-width: 3px; border-top-width: 3px;" width="5%"  align="center">'.'№'.'</td>';
        echo '<td style="border-bottom-width: 3px; border-top-width: 3px;" align="center">'.'Участники'.'</td>';
        echo '<td style="border-bottom-width: 3px; border-right-width: 3px; border-top-width: 3px;" align="center">'.'Контакты'.'</td>';
        echo("</tr>");
        while ($row = $result->fetch_row()) {
            echo('<tr>');
            echo '<td style="border-bottom-width: 3px; border-left-width: 3px;" rowspan="2" width="5%"  align="center">'.$row[0].'</td>';
            echo '<td align="center">'.$row[1].'</td>';
            echo '<td align="center" style="border-right-width: 3px;">'.$row[3].'</td>';
            echo("</tr>");
            echo('<tr style="border-bottom-width: 6px">');
            echo '<td style="border-bottom-width: 3px;" align="center">'.$row[2].'</td>';
            echo '<td style="border-bottom-width: 3px; border-right-width: 3px;" align="center">'.$row[4].'</td>';
            echo("</tr>");
        }?>
    </table>
</div>
<?php
require("footer.php");
?>
