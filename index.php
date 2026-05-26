<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <img src="logo.webp" alt="Логотип МосПолитеха">
    <h1>Форма обратной связи</h1>
</header>

<main>
    <form action="https://httpbin.org/post" method="POST">

        <div class="form-group">
            <label for="name">Имя пользователя</label>
            <input type="text" id="name" name="name" placeholder="Введите ваше имя" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Введите ваш e-mail" required>
        </div>

        <div class="form-group">
            <label for="type">Тип обращения</label>
            <select id="type" name="type">
                <option value="complaint">Жалоба</option>
                <option value="suggestion">Предложение</option>
                <option value="gratitude">Благодарность</option>
            </select>
        </div>

        <div class="form-group">
            <label for="message">Текст обращения</label>
            <textarea id="message" name="message" placeholder="Введите текст обращения" required></textarea>
        </div>

        <div class="form-group">
            <label>Вариант ответа</label>
            <div class="checkbox-group">
                <label>
                    <input type="checkbox" name="reply[]" value="sms"> СМС
                </label>
                <label>
                    <input type="checkbox" name="reply[]" value="email"> E-mail
                </label>
            </div>
        </div>

        <button type="submit" class="btn">Отправить</button>
        <a href="page2.php" class="btn btn-secondary">Перейти на страницу 2</a>

    </form>
</main>

<footer>
    <p>Copyright</p>
</footer>

</body>
</html>