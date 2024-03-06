
<style>
    * {
        background-color: #c8bca4;
    }

    a {
        color: #007bff;
    }

    a:visited {
        color: purple;
    }
    
</style>

<h2><?= esc($title) ?></h2>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="./news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>

<form action="<?= base_url('news/new') ?>" method="get">
    <button type="submit"style="color: black; cursor: pointer;">Post a Comment</button>
</form>

<form action="<?= base_url('main') ?>" method="get">
    <button type="submit" style="color: black; cursor: pointer;">Back to About Me</button>
</form>