<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Team Member</h1>
    <h4><?php 
    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }
    echo $_GET['msg'];?></h4>
    <form action="function.php" method="post">
    <label for="roll">Enter Your Roll</label>
    <input type="number" name="roll" placeholder="roll must be 1-10">
    <button type="submit">Submit</button>
    </form>

</body>
</html >