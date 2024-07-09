<?php
    require "main.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ввод сообщений</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>       
        <header><h1>Ввод сообщений</h1> </header>
    </div>
    <div>
        <form id="messageForm" action="" method="POST">
            <label for="fio_input">ФИО:</label>
            <input type="text" id="fio_input" name="fio_input" required>
            <br>
            <label for="email_input">Email:</label>
            <input type="email" id="email_input" name="email_input" required>
            <br>
            <label for="message_input">Сообщение:</label>
            <textarea id="message_input" name="message_post" required></textarea>
            <br>
            <input type="submit" name="send_message" value="Отправить сообщение">
        </form>
    </div>

    <div>
    <section class="container">
            <h2>Обращения</h2>
            <?php foreach ($messages as $message): ?>
                <div class="item">
                    <p3 name="FIO_read"><?php echo htmlspecialchars($message['FIO']); ?></p3><br>
                    <p3 name="email_read"><?php echo htmlspecialchars($message['email']); ?></p3><br>
                    <p3 name="message_text_read"><?php echo htmlspecialchars($message['message_text']); ?></p3><br>
                </div>
            <?php endforeach; ?>
        </section>
    </div>
</body>
</html>
