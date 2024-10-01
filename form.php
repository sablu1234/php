<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // $price= $_POST['price'];
    // $qty= $_POST['qty'];
    
    ?>
    <form action="index.php" method="post">
        <label for="price">Input price</label>
        <input type="number" name='price' value="<?php echo $price;?>">

        <label for="qty">Input QTY</label>
        <input type="number" name='qty' value="<?php echo $qty;?>">

        <input type="submit" value="submit">
    </form>
</body>
</html>