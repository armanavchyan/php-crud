<?php
namespace views;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
          <h2>DELETE FORM</h2>
          <form action="/user/delete" method="post">
                <div>
                  <label for="email">Email:</label>
                  <input type="email" method="post" id="email" placeholder="Enter email" name="email">
                </div>
                 <br>
                <div> 
                <button type="creat" class="btn btn-primary">delete</button>
                </div>
          </form>
        </div>
    </body>
</html>