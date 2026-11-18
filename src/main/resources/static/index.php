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
        <div class="card">
          <h3>Дырявый</h3>
          <img src="img/likaon1.jpg" alt="desc1">
          <p>Он продырявил своим... Продолжение следует</p>
        </div>

        <div class="card">
          <h3>ВелЛи</h3>
          <img src="img/likaon2.jpg" alt="desc2">
          <p>Ликаон и Велина встретились в пабе и он показал свой... Прожолжение следует</p>
        </div>

        <div class="card">
          <h3>Выйти из игры</h3>
          <img src="img/likaon3.jpg" alt="desc3">
          <p>У него настолько был большой что он вышел за игру</p>
        </div>

      </div>
    </div>

        <h2>Ответ привилегированного человека, очень крутого, да-да!!!</h2>
    <div class="feedback-container" id="feedback-container"></div>

    <div id="over"></div>
    <?php require 'php/includes/index/footer.php'; ?>