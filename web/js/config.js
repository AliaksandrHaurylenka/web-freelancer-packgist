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
