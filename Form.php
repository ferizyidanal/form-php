<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="welcome.php" method="post">
        <h1>Buat account baru</h1>
        <h2>sign up form</h2>
        <label for="feri"></label>
    <label name='fisrtname'>First name :</label>
    <input type="texs" name="first">
    <label name="last">Last name</label>
    <input type="text" name="last">
    <p>Gender</p>
    <input type="radio" name="gender" value="male">
    <label for="male">Male</label>
    <br>
  <input type="radio" name="gender" value="female">
    <label for="female">female</label>
<p>Nationality</p>
<select>
    <option>indonesia</option>
    <option>arab</option>
    <option>sunda</option>
</select>
<p>Laguage spoken</p>
<input type="checkbox" id="bahasa indonesia" name="bahasa" value="bahasa indonesia">
<label for="bahasa indonesia">bahasa indonesia</label>
<br>
<input type="checkbox" id="Bahasa arab" name="bahasa"  value="bahasa arab">
<label for="bahasa indonesia">Bahasa arab</label>
<br>
<input type="checkbox" id="bahasa sunda" name="bahasa" value="bahasa sunda">
<label for="bahasa indonesia">bahasa sunda</label>
<BR>
    <p>Bio</p>
<textarea cols="30" rows="10" name="bio"></textarea>
<br>
<button type="submit">sign up</button>
</form>

</body>
</html>