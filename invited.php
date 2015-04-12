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
        $color;
        echo("<tr bgcolor=".$color.">");
        echo '<td width="5%"  align="center">'.'№'.'</td>';
        echo '<td align="center">'.'Участники'.'</td>';
        echo '<td align="center">'.'Контакты'.'</td>';
        echo("</tr>");
        while ($row = $result->fetch_row()) {
            if ($q==1){
                $q=0;
                $fontcolor="white";
                $color="333333";}
            else {
                $q=1;
                $fontcolor="black";
                $color="ff2b06";}
            echo('<tr style="color: '.$fontcolor.';" bgcolor='.$color.">");
            echo '<td rowspan="2" width="5%"  align="center">'.$row[0].'</td>';
            echo '<td align="center">'.$row[1].'</td>';
            echo '<td align="center">'.$row[3].'</td>';
            echo("</tr>");
            echo('<tr style="color: '.$fontcolor.';" bgcolor='.$color.">");
            echo '<td align="center">'.$row[2].'</td>';
            echo '<td align="center">'.$row[4].'</td>';
            echo("</tr>");
        }?>
    </table>
</div>
<?php
require("footer.php");
?>
