<?php

session_start();
//var_dump($_SESSION);

if($_SESSION['auth'] != true) {
header("Location: index.php");
exit;
        }
else { ?>


<html>
<body>
<div style="position: relative; width: 400px;">
<img src="1.png">
<h1>Профайл:</h1>
<h4>name:  jonh Smith</h4>
<h4>age:  30</h4>
<h4>country:  USA</h4>
<h4>about:
<p style="color: #0000fa">
    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
    vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
</p>
</h4>
<div class="form" style="position: absolute; bottom: 510px; left: 350px;">
<form action="logout.php" method="post">
<input type="hidden" name="logout" value="1">
   <input type="submit" value="выйти">
</form>
</div>
</div>
</body>
</html>


<?php }

?>

