<!DOCTYPE html>
<html>
<head>
    <title>News List</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<div class="container">
    <h1>News List</h1>
    
    <div id="list-flex">
        <div id="list" class="news-list">
            <ul id="list-articles">
                <!-- <li v-for="article in articlesList">{{ article.headline }} - {{ article.content }}</li> -->
                <?php foreach ($articles as $article): ?>
                    <strong><?php echo $article['title']; ?></strong><a id="read-more" href="<?php echo $article['url'] ?>" target="_blank"> Read More</a>
                    <p><?php echo $article['description']; ?></p>

                    <hr>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!--DEVELOPMENT ONLY LATEST RELEASE -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->
<!-- PRODUCTION USE STABLE RELEASE -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.8/dist/vue.js"></script>
<script src="javascript/news.js"></script>
</body>
</html>