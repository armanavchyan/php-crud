<?php 
namespace views;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <link href="/css.css" rel="stylesheet">
        <meta charset="utf-8">
    </head>
    <body>
        <a href="/user/create">CREATE USER</a>
        <br>
        <br>
        <a href="/user/change">UBDATE USER</a>
        <br>
        <br>
        <a href="/user/delete">DELETE USER</a>
        <br>
        <br>
        <div>
            <table class="bbb">
                <thead class="bbb">
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($users as $user){
                    ?>
                  <tr>
                    <td><?=$user['name'];echo '<hr>';?></td>
                    <td><?=$user['email'];echo '<hr>';?></td>
                  </tr>
                   <?php 
                    }
                   ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
