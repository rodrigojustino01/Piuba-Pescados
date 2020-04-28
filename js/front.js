jQuery(document).ready(function ($) {
    $('.seta').click(function(){
        $('.mega-menu__open').slideToggle();
        $(this).toggleClass('open');
    });
    
    var slidehome = new Swiper('.slideHome', {
        pagination:{
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
        autoplay: {
            delay: 5000,
        },
        slidesPerView: 1,
        loop: true,
        
    });
    
    var slidepaceiros = new Swiper('.slides-parceiros', {
        navigation: {
            nextEl: '.swiper-button-next-parceiro',
            prevEl: '.swiper-button-prev-parceiro',
          },
        autoplay: {
            delay: 5000,
        },
        slidesPerView: 4,
        loop: true,
        spaceBetween: 50,
        breakpoints: {
            800:{
                slidesPerView: 1
            }
        }
    });
    
    var slideconvenios = new Swiper('.slides-convenios', {
        navigation: {
            nextEl: '.swiper-button-next-convenios',
            prevEl: '.swiper-button-prev-convenios',
          },
        autoplay: {
            delay: 5000,
        },
        slidesPerView: 4,
        loop: true,
        spaceBetween: 50,
        breakpoints: {
            800:{
                slidesPerView: 1
            }
        }
    });


    // if($('.tabSeta').is(':visible')){
        
    //     $('.tabSeta').css('left', ($('.js-tablink').offset().left - 5) +'px');
    //     $('.js-tabCont').fadeOut();
    //     $('#condominio').fadeIn();
    //     $('.tablink').click(function () {
    //         $('.tabSeta').css('left', ($(this).offset().left - 5) +'px');
    //         $('.js-tabCont').fadeOut();
    //         var idEl = $(this).data('tablink');
    //         $('#'+idEl).fadeIn();
            
    //     })
    // }

    // $('select').each(function(){
    //     var $this = $(this), numberOfOptions = $(this).children('option').length;
      
    //     $this.addClass('select-hidden'); 
    //     $this.wrap('<div class="select"></div>');
    //     $this.after('<div class="select-styled"></div>');
    
    //     var $styledSelect = $this.next('div.select-styled');
    //     $styledSelect.text($this.children('option').eq(0).text());
      
    //     var $list = $('<ul />', {
    //         'class': 'select-options'
    //     }).insertAfter($styledSelect);
      
    //     for (var i = 0; i < numberOfOptions; i++) {
    //         $('<li />', {
    //             text: $this.children('option').eq(i).text(),
    //             rel: $this.children('option').eq(i).val()
    //         }).appendTo($list);
    //     }
      
    //     var $listItems = $list.children('li');
      
    //     $styledSelect.click(function(e) {
    //         e.stopPropagation();
    //         $('div.select-styled.active').not(this).each(function(){
    //             $(this).removeClass('active').next('ul.select-options').hide();
    //         });
    //         $(this).toggleClass('active').next('ul.select-options').toggle();
    //     });
      
    //     $listItems.click(function(e) {
    //         e.stopPropagation();
    //         $styledSelect.text($(this).text()).removeClass('active');
    //         $this.val($(this).attr('rel'));
    //         $list.hide();
    //         //console.log($this.val());
    //     });
      
    //     $(document).click(function() {
    //         $styledSelect.removeClass('active');
    //         $list.hide();
    //     });
    
    // });


  $("#toggle").click(function(){
    $("#menu").slideToggle("slow");
  });

});


// window.onscroll = function() {myFunction()};

// var header = document.getElementsByClassName("myHeader");
// var sticky = header.offsetTop;

// function myFunction() {
//   if (window.pageYOffset > sticky) {
//     header.classList.add("sticky");
//   } else {
//     header.classList.remove("sticky");
//   }
// }


// $(window).on('load', function(){
//   $('.botao-menu').on('click', function(e){
//     e.preventDefault();
//     /* Set Variables */
//     var menu_height = $('.nav-main').outerHeight();
    
//     $(this).toggleClass('open');
//     $('.nav').toggleClass('open');
    
//     if($('.nav').hasClass('open')) {
//       $('.nav').css('max-height', menu_height+'px');
//     }
//     else {
//       $('.nav').css('max-height', '');
//     }
//   });
//   $('.link_sub').on('click', function(e){
//     e.preventDefault();
//     /* Set Variables */
//     var menu_height = $('.nav-main').outerHeight();
//     var dropdown_length = $(this).siblings('.sub-menu').children('li').length;
//     var li_height = $(this).siblings('.sub-menu').children('li').outerHeight();
//     var dropdown_height = li_height * dropdown_length;
//     var menu_dropdown_height = menu_height + dropdown_height;
    
//     $(this).toggleClass('open');
//     $(this).siblings('.sub-menu').toggleClass('open');
    
//         if($('.sub-menu').hasClass('open')) {
//           $('.sub-menu').css('max-height', dropdown_height+'px');
//           $('.nav').css('max-height', menu_dropdown_height+'px');
//         }
//         else {
//           $('.sub-menu').css('max-height', '');
//   $('.nav').css('max-height', menu_height+'px');
//         }
//   });
// });