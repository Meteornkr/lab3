
<style>
    * {
        background-color: #c8bca4;
    }
</style>

<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action=" <?php echo site_url('news'); ?> "

method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create news item">
</form>

<form action="<?= base_url('news') ?>" method="get">
    <button type="submit" name="submit" style="cursor: pointer;">Back to News</button>
</form>