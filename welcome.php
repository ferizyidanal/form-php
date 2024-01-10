<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SELAMAT DATANG!<php echo $name?></h1>
    <P>Terimakasih telah bergabung di website kami, media belajar kita bersama</P>
<?php
$first = $_POST["first"];
$last = $_POST["last"] ;
$gender = $_POST["gender"] ;
$bahasa = $_POST["bahasa"];
$bio = $_POST["bio"];

echo "Nama depan: $first";
echo "<br>";
echo "nama belakang: $last";
echo "<br>";
echo "gender : $gender";
echo "<br>";
echo "bahasa : $bahasa";
echo "<br>";
echo "bio : $bio";


?>
</body>
</html>