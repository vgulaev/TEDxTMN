<?php
$currentmenuitem = "3";
require("head.php");
?>

<?php
$mysqli = new mysqli( 'localhost', 'root', '' );
?>

<div id = "maincontainer" class="container">
    <div>
        <form action="eventregister.php" method="post">
            <table>
                <tr>
                    <td>Фамилия:</td>
                    <td>
                        <input id = "surname"/>
                    </td>
                </tr>
                <tr>
                    <td>Имя:</td>
                    <td>
                    <input id = "name"/>
                    </td>
                </tr>
                <tr>
                    <td>e-mail:</td>
                    <td>
                        <input id = "email"/>
                    </td>
                </tr>
                <tr>
                    <td>телефон:</td>
                    <td>
                        <input id = "phone"/>
                    </td>
                </tr>
                <tr>
                    <td colspan = "2">
                        <input type="submit" style = "width: 100%;" value ="Зарегистрироваться"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php
require("footer.php");
?>