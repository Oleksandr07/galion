<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Главная</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/head_print.php'; ?>
  </head>
  <body>
    <section id="wrap">
      <?php include 'include/header.php'; ?>
      <!-- top block -->
      <div id="top">
        <div class="inner_top">
          <img src="./img/banner/inner1.jpg" alt="" class="pic">
        </div>
      </div>
      <!-- /top block -->
      <!-- page -->
      <section id="page">
        <!-- content -->
        <section id="content">
        <h1 class="title">Контакты</h1>
        <div class="contact_box">
          <p>Спасибо, что вы заинтересовались нашей компанией!  <br>Мы всегда готовы ответить на любые вопросы, выслушать деловые предложения или предоставить <br> необходимые данные.</p>
          <div class="contact_block">
            <div class="text">
              <h2>Офис продаж</h2>
              <ul class="marker">
                <li>м.Тульская, 2-я Рощинская улица, дом 10</li>
                <li><b>(495)954-96-33 <br>(916)963-51-66</b></li>
                <li><a href="">pochta@galion.ru</a></li>
              </ul>
            </div>
            <img src="./img/map_print.jpg" alt="" class="map_print">
            <div class="map_box">
              <a href="" class="map"><img src="./img/map.jpg" alt=""></a>
              <span>Нажмите на карту для увеличения</span>
            </div>
          </div>
          <div class="contact_block">
            <div class="text">
              <h2>Производственный цех</h2>
              <ul class="marker">
                <li>м.Тульская, 2-я Рощинская улица, дом 10</li>
                <li><b>(495)954-96-33 <br>(916)963-51-66</b></li>
              </ul>
            </div>
            <img src="./img/map_print.jpg" alt="" class="map_print">
            <div class="map_box">
              <a href="" class="map"><img src="./img/map.jpg" alt=""></a>
              <span>Нажмите на карту для увеличения</span>
            </div>
          </div>
        </div>
        </section>
        <!-- /content -->
        <!-- side -->
        <section id="side">
          <!-- form -->
          <div class="callback_form">
          <p>Вы можете оставить свои контактные данные и мы свяжемя с вами:</p>
            <div class="row row_error">
              <label for="">Имя:</label>
              <input type="text">
              <div class="error_message">Введите свое имя</div>
            </div>
            <div class="row">
              <label for="">Телефон: </label>
              <input type="text" value="8 906 123-45-67">
            </div>
            <div class="row">
              <label for="">Комментарий:</label>
              <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row">
              <input type="submit" value="Отправить" class="button_submit">
              <div class="message_succefull">Ваше сообщение отправлено</div>
            </div>
          </div>
          <!-- /form -->
        </section>
        <!-- /side -->
      </section>
      <!-- /page -->
      <section class="empty"></section>
    </section>
    <!-- /wrap -->
    <?php include 'include/footer.php'; ?>
  </body>
</html>