<!DOCTYPE html>
<html>
<head>
    <title>News List</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<div class="container">

    <!-- navbar -->  
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
        <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Sign in</a>
</div>

</div>
<div class="main">
    
    <div id="list" class="news-list">
        <h1>News List</h1>
        <!-- <div class="article-card" style="display:flex"> -->
            <!-- <li v-for="article in articlesList">{{ article.headline }} - {{ article.content }}</li> -->

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
        <!-- </div> -->
    
    </div>
</div>
<!-- PRODUCTION USE STABLE VUE.JS RELEASE -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.8/dist/vue.js"></script>
<script src="javascript/news.js"></script>
</body>
</html>