<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRISIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/basic.css">
</head>
<body>
    <header>
        <img id="logo" src="./assets/Logo.png">
        <div id="links">
            <a href="index.php" class="active">about</a>
            <a href="write.php">write story</a>
            <a href="view.php">view story</a>
        </div>
        <div id="toggle-btn">
            <i class="fa-solid fa-bars" id="toggle-bar"></i>
            <div id="dropdown">
                <a href="index.php" class="active">about</a><br><br>
                <a href="write.php">write story</a><br><br>
                <a href="view.php">view story</a><br><br>
            </div>
        </div>
    </header>
    
    <section>
        <h1>Write. &nbsp;Share. &nbsp;Inspire.</h1>
        <p>At WSIN, we believe that everyone deserves a safe space to share their stories - without fear of judgement or repercussions. That's why we've created a platform that makes it easy for you to express yourself anonymously. Through our user-friendly interface, you can write and share anything that's on your mind - from personal experiences to thought-provoking ideas. So, what are you waiting for? Start writing now.</p>
        <a href="write.php" class="write-btn">Start writing</a>
    </section>
    <image class="waves" src="./assets/waves.png">
    <script src="./inc/toggle.js"></script>

</body>
</html>