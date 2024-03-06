
<style>
    * {
        background-color: #c8bca4;
        font-family: 'DM Sans', sans-serif;
    }

    h2 {
        font-weight: bold;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .main {
        /* Set padding for spacing */
        padding: 1rem;
        /* Add subtle border and rounded corners */
        border: 1px solid #00000;
        border-radius: 5px;
        margin-bottom: 1rem;
        line-height: 1.5;
        border: 1.5px solid black;
        border-radius: 5px;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:visited {
        color: purple;
    }
    
</style>

<h2><?= esc($title) ?></h2>

<?php if (! empty($guests) && is_array($guests)): ?>

    <?php foreach ($guests as $guest_item): ?>

        <h3><?= esc($guest_item['name']) ?></h3>

        <div class="main">
            <?= esc($guest_item['body']) ?>
        </div>
        <p><a href="./forms/<?= esc($guest_item['slug'], 'url') ?>">View Comment</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Comments</h3>

    <p>Unable to find any comments for you.</p>

<?php endif ?>

<form action="<?= base_url('forms/new') ?>" method="get">
    <button type="submit"style="color: black; cursor: pointer;">Post a Comment</button>
</form>

<form action="<?= base_url('main') ?>" method="get">
    <button type="submit" style="color: black; cursor: pointer;">Back to About Me</button>
</form>