<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат get_headers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <img src="logo.webp" alt="">
    <h1>Результат get_headers</h1>
</header>

<main>
    <div class="form-group">
        <label>Ответ сервера httpbin.org/post:</label>
        <?php
            $url = "https://httpbin.org/post";
            $headers = get_headers($url);
            $result = implode("\n", $headers);
        ?>
        <textarea class="result-area" readonly><?php echo htmlspecialchars($result); ?></textarea>
    </div>

    <a href="index.php" class="btn btn-secondary">← Вернуться к форме</a>
</main>

<footer>
    <p>Copyright</p>
</footer>

</body>
</html>