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
        .news-item {
            width: 50%;
        }
    }
	
	    @media (max-width: 1068px) {
        .news-item {
            width: 70%;
        }
    }
</style>


<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <div style="display: flex; justify-content: center; align-items: flex-start;">
            <div class="news-item" style="text-align: center; background-color: #343b4a; padding: 20px; border-radius: 25px; font-size: 1.5em; margin: 9% auto 0 auto; animation: colorMotion 7s infinite alternate ease-in-out; font-family: 'Roboto', sans-serif;">
			<h2 style="color: #b38f46; font-family: 'Roboto', sans-serif; font-size: 2em; text-align: center;"><?= esc($title) ?></h2>
                <h3 style="color: #b38f46;"><?= esc($news_item['title']) ?></h3>
                <p style="color: #ffffff;"><?= esc($news_item['body']) ?></p>
                <p><a href="./news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
            </div>
        </div>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
