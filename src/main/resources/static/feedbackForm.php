<?php require 'php/includes/feedback/header.php'; ?>
<body>
    <?php require 'php/includes/gradient.php'; ?>

    <div class="menu">
        <a href="index.php"> Домой</a>
    </div>

    <div class="feedback" id="feedback">
        <h2>Форма обратной связи только для прилигированного человека, то бишь </h2>
        <form id="feedback-form">
            <p>
                <label for="user_name">Ваше имя:</label><br>
                <input type="text" name="user_name" id="user_name" class="user_name" required>
            </p>
            <p>
                <label for="user_message">Ваше сообщение</label><br>
                <textarea id="user_message" name="user_message" class="user_message"></textarea>
            </p>
            <button class="submit" type="submit">Отправить</button>
        </form>
    </div>

 <script src="js/CommunicationSaveScript.js"></script>
</body>
</html>