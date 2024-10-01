<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Age Check</h1>
    <h2><?php 
    if(isset( $_GET['msg'])){
        echo $_GET['msg'];
    }
    ?></h2>
    <form action="common.php" method="post">
        <label for="age">Enter Your Age</label>
        <input type="number" name="age">

        <button type="submit">Check</button>
    </form>
</body>
</html>