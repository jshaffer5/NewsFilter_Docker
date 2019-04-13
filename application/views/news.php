<?php session_cache_limiter('nocache');
header('Expires: Thu, 4 Jul 1996 7:34:00 GMT'); ?>

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
        <a class="btn btn-outline-primary" href="/login">Sign in</a>
    </div>

</div>

<div class="main">
    <div id="list" class="news-list">
        <h1>News List</h1>

        <?php
            $db["host"] = "localhost";
            $db["port"] = 5432;
            $db["user"] = "js";
            $db["pass"] = "";
            $db["name"] = "newsfilter";
            // $pdo = new PDO("pgsql:" . sprintf(
            //     "host=%s;port=%s;user=%s;password=%s;dbname=%s",
            //     $db["host"],
            //     $db["port"],
            //     $db["user"],
            //     $db["pass"],
            //     $db["name"],
            //     // ltrim($db["path"], "/")
            // ));
            $db = pg_connect("host=localhost port=5432 dbname=newsfilter user=js");
            if ($db) {
                echo 'pg_connect connection to the PostgreSQL database sever has been established successfully.';
                } else {
                    echo 'pg_connect failed';
                } 

            // if ($pdo) {
            // echo 'A connection to the PostgreSQL database sever has been established successfully.';
            // } else {
            //     echo 'Connection failed';
            // }

            // $sql =<<<EOF
            //     CREATE TABLE COMPANY
            //     (ID INT PRIMARY KEY     NOT NULL,
            //     NAME           TEXT    NOT NULL,
            //     AGE            INT     NOT NULL, 
            //     ADDRESS        CHAR(50),
            //     SALARY         REAL);
            // EOF;

            // $sql =<<<EOF
            //     INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
            //     VALUES (1, 'Paul', 32, 'California', 20000.00 );

            //     INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
            //     VALUES (2, 'Allen', 25, 'Texas', 15000.00 );

            //     INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
            //     VALUES (3, 'Teddy', 23, 'Norway', 20000.00 );

            //     INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
            //     VALUES (4, 'Mark', 25, 'Rich-Mond ', 65000.00 );
            // EOF;

            // $sql =<<<EOF
            //     INSERT INTO users (username, password)
            //     VALUES ('bar', 'bar');

            //     INSERT INTO users (username, password)
            //     VALUES ('baz', 'baz');

            // EOF;

            // $username = "js"; //$_POST["username"];
            // $password = "pass";
            // $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

            // $ret = pg_query($db, $sql);
            // if(!$ret) {
            //     echo pg_last_error($db);
            // } else {
            //     echo "\nRecords created successfully\n";
            // }
            // pg_close($db);


            
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
<!-- <script src="javascript/news.js"></script> -->
</body>
</html>