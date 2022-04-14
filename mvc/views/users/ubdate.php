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
          <h2>UBDATE FORM</h2>
          <form action="/user/change" method="post">
                <div>
                  <label for="name">Name:</label>
                  <input type="name" method="post"  id="name" placeholder="Enter name" name="name">
                </div>
              <br>
                <div>
                  <label for="email">Email:</label>
                  <input type="email" method="post" id="email" placeholder="Enter email" name="email">
                </div>
              <br>
                <div> 
                <button type="creat" class="btn btn-primary">ubdate</button>
                </div>
          </form>
        </div>
    </body>
</html>