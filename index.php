<?php require 'php/includes/index/header.php'; ?>

<body>
  <div id="mmm"></div>

  <?php require 'php/includes/gradient.php'; ?>

  <div class="menu">
        <a href="#mmm">Главная</a>
        <a href="#cont">Трэки ликаона</a>
        <a href="#hero">Об трэках мсиЛикаона</a>
        <a href="#over">Внушать что сказал Ликаон</a>
        <a href="feedbackForm.php"> Форма обратной связи</a>
      </div>

    <div class="header">
      <img src="img/logo.jpg" alt="Logo">
    </div>

    <div class="hero" id="hero">
      <img src="img/likaon4.jpg" alt="Трэк">
      <h1>Огромный Ликаона</h1>
      <p>У ликаона был настолько огромный, что он вышел за игру, в музыку</p>
      <button class="btn">Слушай тржк</button>
    </div>

    <div class="grid-section">
      <h2>Список трэков Ликаона</h2>

      <div class="cont" id="cont">
        <?php require 'php/includes/index/card.php'; ?>
    </div>

    <div class="feedback-response">
        <h2>Ответ привилегированного человека, очень крутого, да-да!!!</h2>
        <h2 class="target-heading">

                <?php
                    $databaseFileDataTxt = __DIR__ . '/php/text_bd/data.txt';
                    $databaseTestTxt = __DIR__ . "/php/text_bd/test.txt";
                    if(is_readable($databaseFileDataTxt) && filesize($databaseFileDataTxt) > 0) {
                        $responseText = file_get_contents($databaseFileDataTxt);
                    } else {
                        $responseText = file_get_contents($databaseTestTxt);
                    }

                    echo $responseText;
                ?>

            </h2>
    </div>
    <div id="over"></div>
    <?php require 'php/includes/index/footer.php'; ?>