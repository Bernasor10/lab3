<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<style>
    @keyframes colorMotion {
        0%, 100% {
            box-shadow: 0px 0px 20px 10px #132633;
        }
        25%, 75% {
            box-shadow: 0px 0px 15px 8px #b38f46;
        }
        50% {
            box-shadow: 0px 0px 10px 6px #94b4c6;
        }
    }

    @media (min-width: 1068px) {
        .form-item {
            width: 50%;
        }
    }

    @media (max-width: 1068px) {
        .form-item {
            width: 75%;
        }
    }

    input[name="title"], textarea {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        background-color: #111;
        color: #ffffff;
        resize: none;
    }

    input[type="submit"] {
        width: 50%;
        background-color: #111;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #b38f46;
    }
</style>

<style>
    .validation-list {
        list-style-type: none;
        color: darkred;
    }

    .validation-list ul {
        list-style-type: none;
        padding-left: 0;
    }

    .validation-list li {
        color: darkred;
    }
</style>

<div style="display: flex; justify-content: center; align-items: flex-start; flex-direction: column;">
    <div class="form-item" style="text-align: center; background-color: #343b4a; padding: 20px; border-radius: 25px; font-size: 2em; margin: 10% auto 0 auto; animation: colorMotion 7s infinite alternate ease-in-out; font-family: 'Roboto', sans-serif;">
        <h2 style="color: #b38f46;"><?= esc($title) ?></h2>

        <?= session()->getFlashdata('error') ?>

        <ul class="validation-list">
            <?= validation_list_errors() ?>
        </ul>

        <form action="../news" method="post" style="color: #ffffff;">
            <?= csrf_field() ?>

            <label for="title" style="display: block;">Title</label>
            <input type="input" name="title" value="<?= set_value('title') ?>">
            <br>

            <label for="body" style="display: block;">Text</label>
            <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
            <br>

            <input type="submit" name="submit" value="Create news item">
        </form>
    </div>
</div>
