<?php
namespace views;
?>
<!DOCTYPE html>
<html>
     <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="/news/create" method="post">
            <label>Title:</label>
            <input type="text"  name="title"><br><br>
            <label>Autor:</label>
            <input type="text" name="autor"><br><br>
            <p><textarea rows="10" cols="45" name="text"></textarea></p>
            <p><input type="submit" value="Отправить"></p>
        </form>

    </body>
</html>
