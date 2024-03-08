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

    @media (max-width: 1068px) {
        .guest-item {
            min-width: 75%;
        }
    }
</style>

<div style="display: flex; justify-content: center; align-items: flex-start; flex-direction: column;">
    <h2 style="text-align: center; color: #b38f46; font-size: 3em; margin: 10% auto 0 auto; font-family: 'Roboto', sans-serif;"><?= esc($title) ?></h2>

    <?php if (!empty($guest) && is_array($guest)): ?>

        <?php foreach ($guest as $guest_item): ?>

            <div class="guest-item" style="text-align: left; background-color: #343b4a; padding: 20px; border-radius: 15px; font-size: 1.5em; width: 40%; margin: 3% auto 0 auto; animation: colorMotion 7s infinite alternate ease-in-out; font-family: 'Roboto', sans-serif;">
            <h3 style="color: #b38f46;"><?= esc($guest_item['full_name']) ?></h3>
            <div class="main" style="color: #ffffff;">
                Gender: <?= esc($guest_item['gender']) ?><br>
                Website: <a href="<?= $guest_item['website'] ?>" target="_blank"><?= esc($guest_item['website']) ?></a><br>
                Comment: <?= esc($guest_item['comment']) ?><br>
                Date: <?= esc($guest_item['reg_date']) ?>
            </div>
            <p><a href="/guest/<?= esc($guest_item['email_address'], 'url') ?>">View Guest detail</a></p>
        </div>


        <?php endforeach ?>

    <?php else: ?>

        <div class="guest-item" style="text-align: left; background-color: #343b4a; padding: 20px; border-radius: 15px; font-size: 1.5em; width: 60%; margin: 5% auto 0 auto; animation: colorMotion 7s infinite alternate ease-in-out; font-family: 'Roboto', sans-serif;">
            <h3 style="color: #b38f46;">No Guests</h3>
            <p style="color: #ffffff;">Unable to find any guests for you.</p>
        </div>

    <?php endif ?>
</div>
