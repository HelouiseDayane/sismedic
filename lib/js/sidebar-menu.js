    $(".toggle-nav").click(function () {
        $('.nav-menu').css("left", "0px");
    });
    $(".mobile-back").click(function () {
        $('.nav-menu').css("left", "-410px");
    });
   

    $(".page-wrapper").attr("class", "page-wrapper "+localStorage.getItem("page-wrapper"));
    $(".page-body-wrapper").attr("class", "page-body-wrapper "+localStorage.getItem("page-body-wrapper"));


    if (localStorage.getItem("page-wrapper") === null) {
        $(".page-wrapper").addClass("compact-wrapper");
    }   

  // left sidebar and horizotal menu
    if($('#pageWrapper').hasClass('compact-wrapper')){
          jQuery('.submenu-title').append('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
          jQuery('.submenu-title').click(function () {
              jQuery('.submenu-title').removeClass('active');
              jQuery('.submenu-title').find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
              jQuery('.submenu-content').slideUp('normal');
              if (jQuery(this).next().is(':hidden') == true) {
                  jQuery(this).addClass('active');
                  jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>');
                  jQuery(this).next().slideDown('normal');
              } else {
                  jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
              }
          });
          jQuery('.submenu-content').hide();

          jQuery('.menu-title').append('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
          jQuery('.menu-title').click(function () {
              jQuery('.menu-title').removeClass('active');
              jQuery('.menu-title').find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
              jQuery('.menu-content').slideUp('normal');
              if (jQuery(this).next().is(':hidden') == true) {
                  jQuery(this).addClass('active');
                  jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>');
                  jQuery(this).next().slideDown('normal');
              } else {
                  jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
              }
          });
          jQuery('.menu-content').hide();
    } else if ($('#pageWrapper').hasClass('horizontal-wrapper')) {
        var contentwidth = jQuery(window).width();
        if ((contentwidth) < '992') {
            $('#pageWrapper').removeClass('horizontal-wrapper').addClass('compact-wrapper');
            $('.page-body-wrapper').removeClass('horizontal-menu').addClass('sidebar-icon');
            jQuery('.submenu-title').append('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
          jQuery('.submenu-title').click(function () {
              jQuery('.submenu-title').removeClass('active');
              jQuery('.submenu-title').find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
              jQuery('.submenu-content').slideUp('normal');
              if (jQuery(this).next().is(':hidden') == true) {
                  jQuery(this).addClass('active');
                  jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>');
                  jQuery(this).next().slideDown('normal');
              } else {
                  jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
              }
          });
          jQuery('.submenu-content').hide();

          jQuery('.menu-title').append('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
          jQuery('.menu-title').click(function () {
              jQuery('.menu-title').removeClass('active');
              jQuery('.menu-title').find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
              jQuery('.menu-content').slideUp('normal');
              if (jQuery(this).next().is(':hidden') == true) {
                  jQuery(this).addClass('active');
                  jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>');
                  jQuery(this).next().slideDown('normal');
              } else {
                  jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
              }
          });
          jQuery('.menu-content').hide();
        }

    }

// toggle sidebar
$nav = $('.main-nav');
$header = $('.page-main-header');
$toggle_nav_top = $('#sidebar-toggle');
$toggle_nav_top.click(function() {
  $this = $(this);
  $nav = $('.main-nav');
  $nav.toggleClass('close_icon');
  $header.toggleClass('close_icon');
});

$( window ).resize(function() {
  $nav = $('.main-nav');
  $header = $('.page-main-header');
  $toggle_nav_top = $('#sidebar-toggle');
  $toggle_nav_top.click(function() {
    $this = $(this);
    $nav = $('.main-nav');
    $nav.toggleClass('close_icon');
    $header.toggleClass('close_icon');
  });
});

$body_part_side = $('.body-part');
$body_part_side.click(function(){
  $toggle_nav_top.attr('checked', false);
  $nav.addClass('close_icon');
  $header.addClass('close_icon');
});

// document sidebar
$('.mobile-sidebar').click(function(){
  $('.document').toggleClass('close')
});

// $(".mobile-sidebar").click(function(){
//   $("p").toggleClass("main");
// });

//    responsive sidebar
var $window = $(window);
var widthwindow = $window.width();
(function($) {
"use strict";
if(widthwindow+17 <= 993) {
    $toggle_nav_top.attr('checked', false);
    $nav.addClass("close_icon");
    $header.addClass("close_icon");
}
})(jQuery);
$( window ).resize(function() {
var widthwindaw = $window.width();
if(widthwindaw+17 <= 991){
    $toggle_nav_top.attr('checked', false);
    $nav.addClass("close_icon");
    $header.addClass("close_icon");
}else{
    $toggle_nav_top.attr('checked', true);
    $nav.removeClass("close_icon");
    $header.removeClass("close_icon");
}
});

// horizontal arrowss
var view = $("#mainnav");
var move = "500px";
var leftsideLimit = -500

// var Windowwidth = jQuery(window).width();
// get wrapper width
var getMenuWrapperSize = function () {
    return $('.sidebar-wrapper').innerWidth();
}
var menuWrapperSize = getMenuWrapperSize();

if ((menuWrapperSize) >= '1660') {
    var sliderLimit = -3000
    
} else if ((menuWrapperSize) >= '1440') {
    var sliderLimit = -3600
} else {
    var sliderLimit = -4200
}

$("#left-arrow").addClass("disabled");
$("#right-arrow").click(function () {
    var currentPosition = parseInt(view.css("marginLeft"));
    if (currentPosition >= sliderLimit) {
        $("#left-arrow").removeClass("disabled");
        view.stop(false, true).animate({
            marginLeft: "-=" + move
        }, {
            duration: 400
        })
        if (currentPosition == sliderLimit) {
            $(this).addClass("disabled");
            console.log("sliderLimit", sliderLimit);
        }
    }
});

$("#left-arrow").click(function () {
    var currentPosition = parseInt(view.css("marginLeft"));
    if (currentPosition < 0) {
        view.stop(false, true).animate({
            marginLeft: "+=" + move
        }, {
            duration: 400
        })
        $("#right-arrow").removeClass("disabled");
        $("#left-arrow").removeClass("disabled");
        if (currentPosition >= leftsideLimit) {
            $(this).addClass("disabled");
        }
    }

});

// page active
    $( ".main-navbar" ).find( "a" ).removeClass("active");
    $( ".main-navbar" ).find( "li" ).removeClass("active");

    //var current = window.location.pathname
    var current = window.location.href.slice(window.location.href).split('?')[0].split('/'); current=current[current.length-1]; /* incluido para considerar hash na URL /***/
    if(current==''){ current = '#home';} // Se a URL estiver vazia seta para #home (index)
    


    $(".main-navbar ul>li a").filter(function() {

        var link = $(this).attr("href");
        if(link){
            if (current.indexOf(link) != -1) {
                $(this).parents().children('a').addClass('active');
                $(this).parents().parents().children('ul').css('display', 'block');
                $(this).addClass('active');
                $(this).parent().parent().parent().children('a').find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>');
                $(this).parent().parent().parent().parent().parent().children('a').find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>');
                return false;
            }
        }
    });
    try {
      $('.custom-scrollbar').animate({
          scrollTop: $('a.nav-link.menu-title.active').offset().top - 500
      }, 1000);
    }
    catch(err){ // caso a pagina não esteja listada no menu
      //console.error('item out of menu');console.warn('item out of menu');console.info('item out of menu');
    }
    $(".main-navbar a").click(function(){ $(this).addClass("active"); }); // DEIXA O TOPICO CLICADO, COMO ATIVO



    /* -- ------------------------------------------------------------- /***/
    /* SETA A URL NO BROWSER, SEM GARREGAR A PÁGINA
    /* -- ------------------------------------------------------------- /***/
        //revela a url do link
        $('.main-navbar a').click(function(e){
          e.preventDefault();
          try { // caso seja uma url comum
            window.history.pushState({url: "" + $(this).attr('href') + ""}, $(this).attr('title') , $(this).attr('href'));
            //window.history.pushState({url: "" + $(this).attr('href') + ""}, $(this).attr('title') , '#'+$(this).attr('href').split('.php')[0]).split('.html')[0]);

            //alert( $(this).attr('href').split('#')[1]  );
          }
          catch(err){ // caso seja uma url em javascript, executa
            eval($(this).attr('href'));
          }
        });

    /* -- ------------------------------------------------------------- /***/
    /* TRECHO INSERIDO PARA LOAD DO TITLE
    /* -- ------------------------------------------------------------- /***/
        
        let filtro_titulo_ = "Yghor Meira -";

        $('.main-navbar *').click(function(){
          try {
            $('#pagetitle').html('Carregando...');
            setTimeout(function(){
              $('#pagetitle').html($('title')[0].text.split(filtro_titulo_)[1].trim());
            }, 200);
          }
          catch(err){
            setTimeout(function(){
              console.error("\033[33mOCORREU UM ERRO ","\nao executar \"filtro_titulo_\" \nPor favor, verifique....");
            }, 200);
          }
          finally {
            /* /***/
          }
        });
        try {
        $('#pagetitle').html($('title')[0].text.split(filtro_titulo_)[1].trim());
        }
          catch(err){
            /* /***/
          }
    /* -- ------------------------------------------------------------- /***/