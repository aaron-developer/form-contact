<?php
include("config.php");
extract($_POST);
$sql = "INSERT INTO `contactdata`(`firstname`, `lastname`, `phone`, `email`, `message`) VALUES ('".$firstname."','".$lastname."',".$phone.",'".$email."','".$message."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo "Thank You For Contacting Us ";
$mysqli->close();

echo htmlspecialchars($_SERVER["PHP_SELF"]);

//------------------ip validation
$ip_add = $_SERVER['REMOTE_ADDR'];

if (!filter_var($ip_add, FILTER_VALIDATE_IP) === false) {
  echo("<br><br/>" ."$ip_add is a valid IP address");
} else {
  echo("$ip_add is not a valid IP address");
}

//------------------------Valid URL
$url = "http://localhost/$/datos/form-process.php";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("<br><br/>" . "$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}

?>

<!------------------------------>
    <h2>Excellent on less 24 hours us comunicate with you:</h2>

   <h6 >
   <?php if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    echo $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    echo $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
   ?> 
   </h6>
   
   <h6>
   <?php
   echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

   $navegador = get_browser(null, true);
   print_r($navegador);
   ?>
   </h6>
 
 <!-------------------------------->

<style>
    body{
        background-color:black;
        color:green;
    }
</style>

<!------
Objetos anidados
Los valores de un objeto pueden ser otro objeto:
Puede acceder a objetos anidados mediante la notación de puntos o la notación de corchetes:
------->
<p id="demo"></p>

<script src="js.js"></script>

<!--
<p id="demo"></p>

<script>
let x = "";
const myObj = {
  name: "John",
  age: 30,
  cars: [
    {name:"Ford", models:["Fiesta", "Focus", "Mustang"]},
    {name:"BMW", models:["320", "X3", "X5"]},
    {name:"Fiat", models:["500", "Panda"]}
  ]
}

for (let i in myObj.cars) {
  x += "<h2>" + myObj.cars[i].name + "</h2>";
  for (let j in myObj.cars[i].models) {
    x += myObj.cars[i].models[j] + "<br>";
  }
}

document.getElementById("demo").innerHTML = x;
</script>

-->