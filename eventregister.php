<?php
$currentmenuitem = "3";
require("head.php");
//Подключение к БД
require("sett.php");
//$mysqli = new mysqli( 'localhost', 'root', 'rootpass', 'tedxtura' );
$mysqli = new mysqli( $dbs, $dbl, $dbp, $dbn );

if (mysqli_connect_errno()) {
    printf( "Connect failed: %s\n", mysqli_connect_error() );
    exit();
}

//$result2 = $mysqli->query( "INSERT INTO userinv (surname, name, email, phone)
//VALUES('bdd','gdfg', 'dvgsgds', 'dsgsgsg')" ); 
$mysqli->commit();
//$mysqli->
//$mysqli->('userinv');
//$mysqli->query("use userinv")
//echo( $mysqli->query('select * from userinv') );
//Перенос информации в переменные
if (isset($_POST['surname'])) { $surname = $_POST['surname'];
    if ($surname == '') { unset($surname);} }
if (isset($_POST['name'])) { $name = $_POST['name'];
    if ($name == '') { unset($name);} }
if (isset($_POST['email'])) { $email = $_POST['email'];
    if ($email == '') { unset($email);} }
if (isset($_POST['phone'])) { $phone=$_POST['phone'];
    if ($phone =='') { unset($phone);} }
//Нейтрализация тэгов и скриптов, а так же удаление лишних пробелов
$surname = stripslashes($surname);
$surname = htmlspecialchars($surname);
$name = stripslashes($name);
$name = htmlspecialchars($name);
$email = stripslashes($email);
$email = htmlspecialchars($email);
$phone = stripslashes($phone);
$phone = htmlspecialchars($phone);
$surname = trim($surname);
$name = trim($name);
$email = trim($email);
$phone = trim($phone);
//Проверка на заполненность полей
$w = '';
$q = '';
if (empty($surname) or empty($name) or empty($email) or empty($phone))
{
    $w = "Пожалуйста, заполните все поля";
}
else{
//Проверка на существование такого же участника
//$result = $mysqli->query("SELECT 'id' FROM userinv
//WHERE (surname='$surname', name='$name', email='$email', phone='$phone')");
$result = $mysqli->query("SELECT 'id' FROM userinv WHERE (email='$email')");
if ( $row = $result->fetch_row() ) {
    echo( "Участник с таким email уже зарегестрирован." );
}
else {
// Регистрация
    $result2 = $mysqli->query( "INSERT INTO userinv (surname, name, email, phone)
    VALUES('$surname','$name', '$email', '$phone')" );
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
    $w = "Вы успешно зарегистрированы!";
}
else {
    if ($w ==''){
    $w = "Ошибка.";
}
}
}
}
?>
    <div id = "maincontainer" class="container">
        <p>
<?php
//printf($_POST['surname'])
//echo( $result );
echo ($w);
echo ($q);
?></p>
        <table style="table-layout: fixed; width: 100%">
            <tr>
                <td style="text-align: right; font-size: 18px;">
                    <a href="/jointoevent.php" class="tedxredcolor">Регистрация</a>
                </td>
            </tr>
        </table>
    </div>
<?php
require("footer.php");
?>
