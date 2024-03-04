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
</style>

<div style="display: flex; justify-content: center; align-items: flex-start; height: 100vh;">
    <div style="text-align: center; background-color: #343b4a; padding: 20px; border-radius: 25px; font-size: 1.5em; width: 70%; margin: 10% auto 0 auto; animation: colorMotion 7s infinite alternate ease-in-out; font-family: 'Roboto', sans-serif;">
        <h2 style="color: #b38f46;"><?= esc($news['title']) ?></h2>
        <p style="color: #ffffff;"><?= esc($news['body']) ?></p>
    </div>
</div>
