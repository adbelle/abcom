<div class="grid-12">
<?php foreach ($news as $news_item): 
	if ($news_item['visible'] = '1') { ?>

    <h4><?php echo $news_item['title'] ?></h4>
    <div id="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="/news/<?php echo $news_item['slug'] ?>">View article</a></p>
	<br />

<?php } endforeach ?>
</div>
