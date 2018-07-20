$(function(){

  //АКТИВНЫЕ ВКЛАДКИ
  var pageHref=window.location.pathname;
  $('.menu li a').removeClass('active').addClass('float-shadow');
  $('.menu a').each(function(){ // для каждой ссылки
    var linkHref=$(this).attr('href');//получаем href
    if(linkHref==pageHref){//сравниваем полученное из адресной строки с href ссылки
      // при совпадении присваиваем класс - какому элементу хотите?????
      $(this).closest('.menu li a').addClass('active').removeClass('float-shadow');
    }
  });
  // alert(pageHref);
  // alert(linkHref);

  //Красный цвет суббота, воскресение во вкладке Контакты
  $('.day-week tr:nth-child(n+2) td strong').addClass('text-danger');


  /**
   * Вкладка Услуги
   * Наводим курсор на изображение
   * 1. Добавляется изображению класс hover - удаляем при отводе
   * 2. Добавляем тегу a класс shadow (тень при анимации изображения) - удаляем при отводе
   * 3. Ищем родителя, далее предыдущий тег, далее потомка с тегом a и даем ему класс img-hover - удаляем при отводе                                                                                                                [description]
   */
  $('.img-service').hover(function(){
    $(this).addClass('hover-transform');
    $(this).parent().addClass('shadow');
    $(this).parent().prev().children('a').addClass('img-hover');
  }, function(){
    $(this).removeClass('hover-transform');
    $(this).parent().removeClass('shadow');
    $(this).parent().prev().children('a').removeClass('img-hover');
  });

  $('.h2-service').hover(function(){
    $(this).next().children('img').addClass('hover-transform');
    $(this).next().addClass('shadow');
  }, function(){
    $(this).next().children('img').removeClass('hover-transform');
    $(this).next().removeClass('shadow');
  });
// =========================================


// Выпадающее меню при наведении мышки
  $('.drop-inline').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
  });
// =========================================

  /**
   * Активная вкладка Портфолио, Услуги
   * Забираем с адресной строки лишь часть слова one-work, либо слова site;
   * В данном случае жесткие условия на именования файлов услуг: должны начинаться со слова site
   * Сравниваем две переменные.
   * При совпадении присваиваем класс active тегу a вкладок Портфолио, Услуги
   */
  var pageSerch = window.location.pathname;
  var portfolio = pageSerch.substr(6, 8);
  var services = pageSerch.substr(1, 4);
  // alert(services);
  var work = 'one-work';
  var service = 'site';
  if (portfolio == work){
    $('i[id="portfolio"]').parent().addClass('active');
  }else if (services == service){
    $('i[id="service"]').parent().addClass('active');
  }



  //Скролинг вверх
  $.scrollUp(
      {
        scrollName: 'scrollUp',      // Element ID
        scrollDistance: 300,         // Distance from top/bottom before showing element (px)
        scrollFrom: 'top',           // 'top' or 'bottom'
        scrollSpeed: 300,            // Speed back to top (ms)
        easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
        animation: 'fade',           // Fade, slide, none
        animationSpeed: 200,         // Animation speed (ms)
        scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
        scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
        scrollText: '', // Text for element, can contain HTML
        scrollTitle: false,          // Set a custom <a> title if required.
        scrollImg: false,            // Set true to use image
        activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        zIndex: 2147483647           // Z-Index for the overlay
      }
  );
});
