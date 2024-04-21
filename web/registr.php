<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style3.css">
</head>
<body>
    <div class="container">
        <h2>Форма обратной связи</h2>
        <form id="feedbackForm" action="send.php" method="post">
            <div class="form-group">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="phone">Телефон:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Отправить">
            </div>
        </form>
    </div>
</body>

</html>