<link href="<?= base_url('CSS/style.css') ?>" rel="stylesheet">
<style>
    * {
        background-color: #c8bca4;
        margin: 2px;
    }

    p {
        /* Set padding for spacing */
        padding: 1rem;
        /* Add subtle border and rounded corners */
        border: 1px solid #00000;
        margin: 1rem;
        border-radius: 5px;
        margin-bottom: 1rem;
        line-height: 1.5;
        border: 1.5px solid black;
        border-radius: 5px;
    }


</style>
<h2><?= esc($forms['name']) ?></h2>

<p><?= esc($forms['body']) ?></p>

<form action="<?= base_url('forms') ?>" method="get">
    <button type="submit" name="submit" style="cursor: pointer;">Back to Comments</button>
</form>