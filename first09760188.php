<html>
<body>

<style>
h1 {text-align: center;font-size: 3em;}
p {text-align: center;}
div {text-align: center;}
body {background-color: #ededed;}
a {text-align: center;}
</style>

<?php
if ($_POST["name"] == "andromeda" || $_POST["name"] == "andromeda galaxy" || $_POST["name"] == "andromedagalaxy" || $_POST["name"] == "Andromeda" || $_POST["name"] == "Andromeda Galaxy") {
  echo "<h1>Right Answer!</h1><br>";
  echo "<a href=\\secondb487.php>Click here to visit next puzzle</a>";
} else {
echo "<h1>Nope!</h1>";
}
?>

</body>
</html>
