<link href="<?= base_url('CSS/style.css') ?>" rel="stylesheet">
<style>
    * {
        background-color: #c8bca4;
    }
</style>
<h2><?= esc($news['title']) ?></h2>
<p><?= esc($news['body']) ?></p>

<a href="<?= base_url('news') ?>" style="color:black;">news</a>