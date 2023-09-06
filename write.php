
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/basic.css">
    <link rel="stylesheet" href="./css/write.css">
</head>
<body>
    <header>
        <img id="logo" src="./assets/Logo.png">
        <div id="links">
            <a href="index.php">about</a>
            <a href="write.php" class="active">write story</a>
            <a href="view.php">view story</a>
        </div>
        <div id="toggle-btn">
            <i class="fa-solid fa-bars" id="toggle-bar"></i>
            <div id="dropdown">
                <a href="index.php">about</a><br><br>
                <a href="write.php" class="active">write story</a><br><br>
                <a href="view.php">view story</a><br><br>
            </div>
        </div>
    </header>

<?php 
include './config/database.php';

if(isset($_POST['submit'])) {
    $title = $nickname = $post = "";

    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
    $nickname = filter_input(INPUT_POST, 'nickname', FILTER_SANITIZE_SPECIAL_CHARS);
    $post = filter_input(INPUT_POST, 'post', FILTER_SANITIZE_SPECIAL_CHARS);


    $sql = "INSERT INTO story (title, nickname, post) VALUES ('$title', '$nickname', '$post')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('YOUR POST IS ADDED')</script>";
        $title = $nickname = $post = "";
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}

?>

    <section>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="details">
                <label>Title: <input type="text" id="title" name="title"required></label><br><br>
                <label>Nickname: <input type="text" id="nickname" name="nickname"required></label>
            </div>
            <div class="textBox">
                <textarea rows="10" cols="50" name="post" required></textarea>
            </div>

            <div class="btn">
                <button name="submit">Post</button>
            </div>
        </form>
    </section>
    <image class="waves" src="./assets/waves.png">
    <script src="./inc/toggle.js"></script>
    

    
</body>
</html>