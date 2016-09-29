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
                                                                         
                                                                     
                                                                     
                                             
<script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>

<script type="text/javascript">
ymaps.ready(function () { 
            
  var map = new ymaps.Map("YMapsID", {
          // Координаты центра карты (искомый объект)
          center: [55.646154, 37.920297],
          zoom: 15,
          behaviors: ["default", "scrollZoom"]
      }
  );

  map.controls.add("mapTools").add("zoomControl").add("typeSelector");

  var placemark_point = new ymaps.Placemark(
                                        // Координаты метки
                                        [55.646154, 37.920297], {                                                    
                                            // - контент балуна метки
                                            balloonContent: "EXC digital (ООО \"Юнистайл\")<br>"
                                                            +"Московская обл., Люберецкий р-н, "
                                                            +"ПГТ Томилино, мкр. Птицефабрика, "
                                                            +"строение 3Ш <br>"
                                                            +"Тел. +7 (495) 620-58-24<br>"
                                                            +"Время работы с 9:00 до 19:00 (ПН-ПТ)"
                                        }, {
                                            iconImageHref: "http://nikita.tstevart.ru/jzzl.ru/design/img/jzzl_map2.png", // картинка иконки
                                            iconImageSize: [78, 67], // размеры картинки
                                            iconImageOffset: [-15, -15] // смещение картинки
                                        });

  map.geoObjects.add(placemark_point);

  // Закрываем открытые балуны при клике по карте
  map.events.add('click', function () {
      map.balloon.close();
  });

  ymaps.route([
                [55.633504, 37.931509],
                [55.649442, 37.909643]
              ]
              ).then(function (route) {
                  route.getPaths().options.set({
                                                  strokeWidth: 5,
                                                  strokeColor: 'f8584a'
                                               });
                  map.geoObjects.add(route.getPaths()); // Убираем метки начала и конца маршрута
              }, function (error) {
                  alert("Возникла ошибка: " + error.message);
              });

  myPolyline = new ymaps.Polyline([
                                    [55.649251, 37.909279],
                                    [55.649509, 37.909697]                                    
                                  ], {}, {
                                      strokeWidth: 5, // ширина линии
                                      strokeColor: "f8584a"
                                  });
  map.geoObjects.add(myPolyline);

  ymaps.route([
                [55.658229, 37.917465],
                [55.652281, 37.927089]
              ]
              ).then(function (route) {
                  route.getPaths().options.set({
                                                  strokeWidth: 5,
                                                  strokeColor: 'f8584a'
                                               });
                  map.geoObjects.add(route.getPaths()); // Убираем метки начала и конца маршрута
              }, function (error) {
                  alert("Возникла ошибка: " + error.message);
              });

  myPolyline = new ymaps.Polyline([
                                    [55.652281, 37.927089],
                                    [55.651469, 37.9252]
                                    
                                  ], {}, {
                                      strokeWidth: 5, // ширина линии
                                      strokeColor: "f8584a"
                                  });

  map.geoObjects.add(myPolyline);
});
</script>
<div id="YMapsID" style="width:641px;height:432px;max-width: 100%;"></div>
  </body>
</html>