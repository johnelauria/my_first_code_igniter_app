<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <span><a href="news/delete?id=<?php echo $news_item['id']; ?>">Delete</a>
    <div id="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="news/<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>
<a href="news/create">Add news</a>