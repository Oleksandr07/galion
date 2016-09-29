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
    <?php include 'include/head.php'; ?>
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
        <script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
        <div class="contact_box">
          <div class="contact_text">
            <p>Спасибо, что вы заинтересовались нашей компанией!  <br>Мы всегда готовы ответить на любые вопросы, выслушать деловые предложения или предоставить <br> необходимые данные.</p>
          </div>
          <!-- contact block -->
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
              <a href="#YMapsID" class="map" rel="prettyPhoto"><img src="./img/map.jpg" alt=""></a>
              <span>Нажмите на карту для увеличения</span>
              <div id="map1">
              
                  <script type="text/javascript">
                  ymaps.ready(function () { 
                              
                    var map_foot = new ymaps.Map("YMapsID", {
                            // Координаты центра карты (искомый объект)
                            center: [55.595083, 38.090404],
                            zoom: 17,
                            behaviors: ["default", "scrollZoom"]
                        }
                    );

                    map_foot.controls.add("mapTools").add("zoomControl").add("typeSelector");
                          
                    map_foot.geoObjects.add(new ymaps.Rectangle([
                                                              [55.596038, 38.092854],
                                                              [55.595893, 38.092704]
                                                            ], {}, {                
                                                              fillImageHref: 'http://magnifica-salon.ru/design/img/map/map_pics5.png',
                                                              strokeOpacity: 0,
                                                              fillMethod: 'stretch'
                                                            }));

                    var placemark_point = new ymaps.Placemark(
                                                          // Координаты метки
                                                          [55.594116, 38.087605], {                                                    
                                                              // - контент балуна метки
                                                              balloonContent: ""
                                                          }, {
                                                              iconImageHref: "http://magnifica-salon.ru/design/img/map/map_pics3.png", // картинка иконки
                                                              iconImageSize: [75, 54], // размеры картинки
                                                              iconImageOffset: [-5, -25], // смещение картинки
                                                              // Задаем макет балуна - пользовательская картинка с контентом
                                                              balloonLayout: "default#imageWithContent",
                                                              // Картинка балуна
                                                              balloonImageHref: 'http://magnifica-salon.ru/design/img/map/map_pics1.png',
                                                              // Смещение картинки балуна
                                                              balloonImageOffset: [-117, -248],
                                                              // Размеры картинки балуна
                                                              balloonImageSize: [249, 258],
                                                              // Балун не имеет тени
                                                              balloonShadow: false
                                                          });

                    map_foot.geoObjects.add(placemark_point);

                    // Закрываем открытые балуны при клике по карте
                    map_foot.events.add('click', function () {
                        map_foot.balloon.close();
                    });

                    myPolyline = new ymaps.Polyline([
                                                      [55.596201, 38.092754],
                                                      [55.595854, 38.093183],
                                                      [55.595787, 38.093333],
                                                      [55.595113, 38.093376],
                                                      [55.595083, 38.092700],
                                                      [55.595034, 38.092636],
                                                      [55.594986, 38.092636],
                                                      [55.594706, 38.092689],
                                                      [55.594657, 38.092625],
                                                      [55.594645, 38.092518],
                                                      [55.594627, 38.091455],
                                                      [55.594578, 38.091262],
                                                      [55.594469, 38.091048],
                                                      [55.594129, 38.090468],
                                                      [55.594123, 38.089106],
                                                      [55.594099, 38.088966],
                                                      [55.594020, 38.088923],
                                                      [55.593862, 38.088945],
                                                      [55.593868, 38.088226],
                                                      [55.593728, 38.087947],
                                                      [55.593874, 38.087657],
                                                      [55.594117, 38.087604]
                                                      
                                                    ], {}, {
                                                        strokeWidth: 3, // ширина линии
                                                        strokeColor: "9894c7"
                                                    });
                    map_foot.geoObjects.add(myPolyline);

                    map_foot.geoObjects.add(new ymaps.Rectangle([
                                                              [55.596179, 38.092783],
                                                              [55.596288, 38.092597]
                                                            ], {}, {                
                                                              fillImageHref: 'http://magnifica-salon.ru/design/img/map/bus.png',
                                                              strokeOpacity: 0,
                                                              fillMethod: 'stretch'
                                                            }));

                    map_foot.geoObjects.add(new ymaps.Rectangle([
                                                              [55.596598, 38.092404],
                                                              [55.596702, 38.09259]
                                                            ], {}, {                
                                                              fillImageHref: 'http://magnifica-salon.ru/design/img/map/bus.png',
                                                              strokeOpacity: 0,
                                                              fillMethod: 'stretch'
                                                            }));

                    map_foot.geoObjects.add(new ymaps.Rectangle([
                                                              [55.595997, 38.090176],
                                                              [55.596446, 38.09265]
                                                            ], {}, {                
                                                              fillImageHref: 'http://magnifica-salon.ru/design/img/map/ost.png',
                                                              strokeOpacity: 0,
                                                              fillMethod: 'stretch'
                                                            }));

                  });
                  </script>
                  <div id="YMapsID" style="width:641px;height:432px;"></div>

              </div>
            </div>
          </div>
          <!-- /contact block -->
          <!-- contact block -->
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
              <a href="#YMapsID_car" class="map" rel="prettyPhoto"><img src="./img/map.jpg" alt=""></a>
              <span>Нажмите на карту для увеличения</span>
              <div id="map2">
                
                  <script type="text/javascript">
                  ymaps.ready(function () { 
                              
                    var map_car = new ymaps.Map("YMapsID_car", {
                            // Координаты центра карты (искомый объект)
                            center: [55.599125, 38.096532],
                            zoom: 14,
                            type: "yandex#map",
                            behaviors: ["default", "scrollZoom"]
                        }
                    );

                    map_car.controls.add("mapTools").add("zoomControl").add("typeSelector");
                                    
                    var placemark_point = new ymaps.Placemark(
                                                          // Координаты метки
                                                          [55.594116, 38.087605], {                                                    
                                                              // - контент балуна метки
                                                              balloonContent: ""
                                                          }, {
                                                              iconImageHref: "http://magnifica-salon.ru/design/img/map/map_pics3.png", // картинка иконки
                                                              iconImageSize: [75, 54], // размеры картинки
                                                              iconImageOffset: [-5, -25], // смещение картинки
                                                              // Задаем макет балуна - пользовательская картинка с контентом
                                                              balloonLayout: "default#imageWithContent",
                                                              // Картинка балуна
                                                              balloonImageHref: 'http://magnifica-salon.ru/design/img/map/map_pics1.png',
                                                              // Смещение картинки балуна
                                                              balloonImageOffset: [-117, -248],
                                                              // Размеры картинки балуна
                                                              balloonImageSize: [249, 258],
                                                              // Балун не имеет тени
                                                              balloonShadow: false
                                                          });

                    map_car.geoObjects.add(placemark_point);

                    // Закрываем открытые балуны при клике по карте
                    map_car.events.add('click', function () {
                        map_car.balloon.close();
                    });

                    map_car.geoObjects.add(placemark_point);

                    ymaps.route([
                                  [55.602129, 38.108602],
                                  [55.594762, 38.095136],
                                  [55.592089, 38.09093],
                                  [55.593745, 38.087102]
                                ]
                                ).then(function (route) {
                                    route.getPaths().options.set({
                                                                    strokeWidth: 4,
                                                                    strokeColor: '9894c7'
                                                                 });
                                    map_car.geoObjects.add(route.getPaths()); // Убираем метки начала и конца маршрута
                                }, function (error) {
                                    alert("Возникла ошибка: " + error.message);
                                });



                    map_car.geoObjects.add(new ymaps.Rectangle([
                                                              [55.604665, 38.102871],
                                                              [55.604531, 38.102506]
                                                            ], {}, {                
                                                              fillImageHref: 'http://magnifica-salon.ru/design/img/map/map_pics4.png',
                                                              strokeOpacity: 0,
                                                              fillMethod: 'stretch'
                                                            }));

                  });
                  </script>
                  <div id="YMapsID_car" style="width:641px;height:362px;"></div>
              </div>
            </div>
          </div>
          <!-- /contact block -->
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