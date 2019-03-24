<!DOCTYPE html>
<html>
<head>
    <title>News List</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<div class="container">
    <h1>News List</h1>
    
    <div id="list-flex" style="display:flex">
        <div id="list" class="news-list">
            <!-- <div class="article-card" style="display:flex"> -->
                <!-- <li v-for="article in articlesList">{{ article.headline }} - {{ article.content }}</li> -->

                <?php foreach ($articles as $article): ?>

                    <div class="card-text">

                        <strong> 

                            <img class="card-img" src="<?php echo $article['urlToImage'] ?>" alt="no image"> 
                            <?php echo $article['title']; ?>

                        </strong> <a id="read-more" href="<?php echo $article['url'] ?>" target="_blank"> Read More</a>

                        <p><?php echo $article['description']; ?></p>

                    </div>

                    <hr>
                <?php endforeach; ?>
            <!-- </div> -->
        
        </div>
    </div>
</div>
<!-- PRODUCTION USE STABLE VUE.JS RELEASE -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.8/dist/vue.js"></script>
<script src="javascript/news.js"></script>
</body>
</html>