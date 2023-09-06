<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/basic.css">
    <link rel="stylesheet" href="./css/view.css">
</head>
<body>

    <header>
        <img id="logo" src="./assets/Logo.png">
        <div id="links">
            <a href="index.php" >about</a>
            <a href="write.php">write story</a>
            <a href="view.php"class="active">view story</a>
        </div>
        <div id="toggle-btn">
            <i class="fa-solid fa-bars" id="toggle-bar"></i>
            <div id="dropdown">
                <a href="index.php" >about</a><br><br>
                <a href="write.php">write story</a><br><br>
                <a href="view.php" class="active">view story</a><br><br>
            </div>
        </div>
    </header>


<?php 
include './config/database.php';
    // Variable with actual sql command
    $sql = 'SELECT * FROM story';
    //saving the result from my sql
    $result = mysqli_query($conn, $sql); //Connection and sql

    //This set of codes checks error to your sql
    if (!$result) {
        die("SQL Error: " . mysqli_error($conn));
    }

    $stories = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>
    
    <section>
    <?php foreach($stories as $item): ?>
        <div class="card">
            <?php 
                echo "<h3 style='text-transform: uppercase;'>{$item['title']}</h3>";
                echo "<h6>By: {$item['nickname']}</h6>";
                echo "<p style='font-size: 12px;'>&nbsp;&nbsp;&nbsp;{$item['post']}</p>";
            
            ?>
        </div>
    <?php endforeach ?>

    </section>
    <script src="./inc/theme.js"></script>

</body>
</html>