
<form action="POST">
    <input type="text" name="Nomi" placeholder="Nomi">
    <input type="text" name="Malumot" placeholder="Malumot">  
    <input type="submit" name="ok">
</form>
<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "carusel";
$conn = new mysqli($hostName, $userName, $password, $dbName,);
if ($conn)

$sliders = "SELECT * FROM `sliders`;";
$sliders = $conn->query($sliders);

$post = "SELECT * FROM `posts`;";
$post = $conn->query($post);

$blogs = "SELECT * FROM `blogs`;";
$blogs = $conn->query($blogs);