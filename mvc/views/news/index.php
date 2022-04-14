<?php namespace views;
?>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <link href="/css.css" rel="stylesheet">
        <meta charset="utf-8">
    </head>
    <body>
        <a href="/news/create">CREATE NEWS</a>
        <br>
        <br>
        <a href="/news/change">UBDATE NEWS</a>
        <br>
        <br>
        <a href="/news/delete">DELETE NEWS</a>
        <br>
        <br>
        <div>
            <table class="bbb">
                <thead class="bbb">
                  <tr>
                    <th>Title</th>
                    <th>Text</th>
                    <th>Autor</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($selects as $select){
                    ?>
                  <tr>
                    <td><?=$select['title'];echo '<hr>';?></td>
                    <td><?=$select['text'];echo '<hr>';?></td>
                    <td><?=$select['autor'];echo '<hr>';?></td>
                    <td><?=$select['date'];echo '<hr>';?></td>
                  </tr>
                   <?php 
                    }
                   ?>
                </tbody>
            </table>
        </div>
    </body>
</html>