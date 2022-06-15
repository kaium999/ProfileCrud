<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>HTML Forms</h2>

    <form action="saveData" method="post" enctype="multipart/form-data">
        @csrf
      <label for="fname">Your  name:</label><br>
      <input type="text" name="name" ><br>
      <label for="lname">Your Email:</label><br>
      <input type="text" name="email"><br><br>
      <label for="lname">Your Phone:</label><br>
      <input type="text" name="phone"><br><br>
      <label for="lname">Your Address:</label><br>
      <input type="text" name="address"><br><br>
      <label for="lname">Upload Your Image:</label><br>
      <input type="file"  name="image"><br><br>
      <input type="submit" value="Submit">
    </form> 
</body>
</html>