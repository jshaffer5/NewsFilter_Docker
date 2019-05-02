<?php 
session_start();
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header('Expires: Thu, 4 Jul 1996 7:34:00 GMT'); 

$logged_in = TRUE;
if(!isset($_SESSION['user'])||(trim ($_SESSION['user']) == '')){
    // header('location:login');
    $logged_in = FALSE;
    echo "NO USER SESSION";
    
}
//BYPASSING LOGIN FOR DEVELOPMENT
// echo "<a>{$_SESSION['user']} {$logged_in}</a>";

?>


<!DOCTYPE html>
<html>
<head>
    <title>News List</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

<div class="container">

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h2 class="my-0 mr-md-auto font-weight-normal" style="color:#3a91b6;">NewsFilter</h2>
        <nav class="my-2 my-md-0 mr-md-3">
        <a class="btn btn-sm btn-primary" onclick="window.location.reload()" href="#">Refresh Page</a>
        </nav>
        <?php if ($logged_in) { ?>
            <a class="btn btn-outline-primary" href="/login">Log out</a>
        <?php } else { ?>
            <a class="btn btn-outline-primary" href="/login">Sign in</a>
        <?php } ?>
        
    </div>

</div>

<div class="main">
    <div id="list" class="news-list">
        <h1>News List</h1>

        <?php
  
            // $db = pg_connect("host=localhost port=5432 dbname=newsfilter user=js");
            // if ($db) {
            //     echo 'pg_connect connection to the PostgreSQL database sever has been established successfully.';
            // } else {
            //     echo 'pg_connect failed';
            // } 
        ?>
        

            <?php foreach ($articles as $article): ?>

                <div class="news-card">

                    <strong> 

                        <img class="card-img" src="<?php echo $article['urlToImage'] ?>" alt="no image"> 
                        <?php echo $article['title']; ?>

                    </strong> <a id="read-more" href="<?php echo $article['url'] ?>" target="_blank"> Read More</a>

                    <p><?php echo $article['description']; ?></p>

                    <!-- <hr> -->
                </div>

                <hr>
            <?php endforeach; ?>
    
    </div>
</div>
<!-- PRODUCTION USE STABLE VUE.JS RELEASE -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.8/dist/vue.js"></script>
<script src="javascript/login.js"></script>
</body>
</html>