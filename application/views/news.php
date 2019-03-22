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
                <li v-for="article in articlesList">{{ article.headline }} - {{ article.content }}</li>
            </ul>
        </div>
    </div>
</div>
<!--DEVELOPMENT ONLY LATEST RELEASE -->
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<!-- PRODUCTION USE STABLE RELEASE -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.8/dist/vue.js"></script> -->
<script src="javascript/news.js"></script>
</body>
</html>
