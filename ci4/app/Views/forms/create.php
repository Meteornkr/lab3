
<style>
    * {
        background-color: #c8bca4;
    }

    body,
    h2,
    label,
    input,
    textarea,
    button {
        margin: 5px;
        padding: 2px;
    }

    /* Set a base font family and size */
    body {
        font-family: Arial, sans-serif;
        font-size: 16px;
    }

    /* Style the title */
    h2 {
        font-weight: bold;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    /* Style flash messages */
    .flash-message {
        border-radius: 5px;
        padding: 1rem;
        margin-bottom: 1.5rem;
    }

    .flash-message.error {
        background-color: #f54242;
        color: #fff;
    }

    /* Style the form container */
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: fit-content;
        margin: 0 auto;
    }

    /* Style labels */
    label {
        display: block;
        margin-bottom: 0.5rem;
    }

    /* Style input and textarea fields */
    input[type="text"],
    textarea {
        width: 100%;
        padding: 0.75rem;
        border: 1.5px solid black;
        border-radius: 5px;
        box-sizing: border-box; /* Ensures content size includes padding */
    }
</style>

<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action=" <?php echo site_url('forms'); ?> "

method="post">
    <?= csrf_field() ?>

    <label for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Post a comment">
</form>


<form action="<?= base_url('forms') ?>" method="get">
    <button type="submit" name="submit" style="cursor: pointer;">Back to Comments</button>
</form>