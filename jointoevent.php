<?php
$currentmenuitem = "3";
require("head.php");
?>

<div id = "maincontainer" class="container">
    <div>
        <form action="eventregister.php" method="post">
            <table>
                <tr>
                    <td>Фамилия:</td>
                    <td>
                        <input name = "surname"/>
                    </td>
                </tr>
                <tr>
                    <td>Имя:</td>
                    <td>
                    <input name = "name"/>
                    </td>
                </tr>
                <tr>
                    <td>e-mail:</td>
                    <td>
                        <input name = "email"/>
                    </td>
                </tr>
                <tr>
                    <td>телефон:</td>
                    <td>
                        <input name = "phone"/>
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