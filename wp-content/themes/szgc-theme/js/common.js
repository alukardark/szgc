var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;

$(function(){

    if(!Cookies.get('confform-submit')){
        $('body').append("<div class='confform'><div class='wrapper'><p>Сайт использует cookie и аналогичные технологии для удобного и корректного отображения информации. Пользуясь нашим сервисом, вы соглашаетесь с их использованием.</p><div class='wrapper-confform-links'><a class='confform-podr' href='/privacy-policy' target='_blank'>Подробнее</a><span class='confform-submit'>Хорошо</span></div>");
    }

    $('.confform-submit').on('click', function(){
        Cookies.set('confform-submit', 'confform-submit', {expires :  365  });
        $('.confform').fadeOut(300);
    });


    var my_link = location.pathname.split('/');
    $('.modal-fullscreen-menu .list-group > li > a').each(function() {
        var url = $(this).attr('href');
        var regV = '/'+my_link[1]+'/';
        var result = url.match(regV);
        if (result) {
            $(this).parent('li').toggleClass('active-link')
        }
    });

    var my_link_sub = location.pathname.split('/');
    $('.inner-page .submenu-inner .submenu-inner-item a').each(function() {
        var url = $(this).attr('href');
        var regV = '/'+my_link_sub[2]+'/';
        var result = url.match(regV);
        if (result) {
            $(this).toggleClass('active')
        }
    });


    if($('.company-numbers li').length){
        var comma_separator_val = $('.company-numbers li').eq(0).find('.company-numbers-num').data('val');
        var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(' ');

        $('.company-numbers li').eq(0).find('.company-numbers-num').animateNumber({
                number: comma_separator_val,
                numberStep: comma_separator_number_step
            },
            2000);

        comma_separator_val = $('.company-numbers li').eq(1).find('.company-numbers-num').data('val');
        $('.company-numbers li').eq(1).find('.company-numbers-num').animateNumber({
                number: comma_separator_val,
                numberStep: comma_separator_number_step
            },
            1500);

        comma_separator_val = $('.company-numbers li').eq(2).find('.company-numbers-num').data('val');
        $('.company-numbers li').eq(2).find('.company-numbers-num b').eq(0).animateNumber({
                number: comma_separator_val.split("-")[0]
            },
            2000);

        $('.company-numbers li').eq(2).find('.company-numbers-num b').eq(1).animateNumber({
                number: comma_separator_val.split("-")[1]
            },
            1000);

        var decimal_places = 1;
        var decimal_factor = decimal_places === 0 ? 1 : Math.pow(10, decimal_places);
        $('.company-numbers li').eq(2).find('.company-numbers-num b').eq(2).animateNumber(
            {
                number: comma_separator_val.split("-")[2] * decimal_factor,

                numberStep: function(now, tween) {
                    var floored_number = Math.floor(now) / decimal_factor,
                        target = $(tween.elem);
                    if (decimal_places > 0) {
                        floored_number = floored_number.toFixed(decimal_places);
                        floored_number = floored_number.toString().replace('.', ',');
                    }
                    target.text(floored_number);
                }
            },
            500
        );

    }





    $('.modal-fullscreen-menu .list-group li.active-link').addClass('active-link-curent').find('ul').css({'opacity': 1, 'visibility':'visible'});
    if (!isMobile) {

        $('.modal-fullscreen-menu .list-group li').on('mouseover', function(){
            var $this = $(this);

            $('.modal-fullscreen-menu .list-group li').removeClass('active-link');
            $this.siblings('li').find('ul').css({'opacity': 0, 'visibility':'hidden'});
            $this.find('ul').css({'opacity': 1, 'visibility':'visible'});
        });
        $('.modal-fullscreen-menu .list-group li').on('mouseout', function(){
            var $this = $(this);

            $this.addClass('active-link');
            $this.siblings('li').find('ul').css({'opacity': 0, 'visibility':'hidden'});
            $('.modal-fullscreen-menu .list-group li.active-link').find('ul').css({'opacity': 1, 'visibility':'visible'});
        });
    }else{
        $('.modal-fullscreen-menu .list-group > li').removeAttr('data-link');
    }
    $('#modalNavigation').on('shown.bs.modal', function () {
        $('.modal-fullscreen-menu .list-group li').removeClass('active-link').find('ul').css({'opacity': 0, 'visibility':'hidden'});
        $('.modal-fullscreen-menu .list-group li.active-link-curent').addClass('active-link').find('ul').css({'opacity': 1, 'visibility':'visible'});

        $('.btn-menu').css('background', 'transparent').find('.burger').addClass('active');
        $('.inner-page header').css('position', 'fixed');
    });

    $('#modalNavigation').on('hidden.bs.modal', function () {
        $('.btn-menu').removeAttr('style').find('.burger').removeClass('active');
        $('.inner-page header').removeAttr('style');

        $(".modal-backdrop").remove();
        $(".modal.fade.modal-fullscreen-menu").removeClass('in');
        $("body").css('padding-right', '0');
    });




    $('.find-cost').click( function(){
        var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 'slow'); // анимируем скроолинг к элементу scroll_el
        }
        return false; // выключаем стандартное действие
    });




    if(!isMobile){
        AOS.init();
     }


    $('.service-gallery').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        swipe: false,

        prevArrow: $('.gallery .slider-arrow-left'),
        nextArrow: $('.gallery .slider-arrow-right'),
        responsive: [
            {
                breakpoint: 1601,
                settings: {
                    slidesToShow: 3,
                }
            },{
                breakpoint: 993,
                settings: {
                    swipe: true,
                    slidesToShow: 2,
                }
            },{
                breakpoint: 577,
                settings: {
                    swipe: true,
                    slidesToShow: 1,
                }
            }
        ]
    });


    $('.about-slider').slick({
        fade: true,
        swipe: false,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 200,
        pauseOnFocus: false,
        pauseOnHover: false,

    });

    $('.about-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $('.about-img').removeClass('anim');
        $('.about-img.bath').removeClass('bathOpacity');
        setTimeout(function(){
            $('.about-img').addClass('anim');
            $('.about-img.bath').addClass('bathOpacity');
        },100);
    });



    $('.services-slider').slick({
        swipe: false,
        dots: true,
        prevArrow: $('.section-services .slider-arrow-left'),
        nextArrow: $('.section-services .slider-arrow-right'),
        responsive: [
            {
                breakpoint: 993,
                settings: {
                    swipe: true,
                }
            }
        ]
    });

    function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function() {
            var $this = $(this);
            var $animationDelay = $this.data('delay');
            var $animationDuration = $this.data('duration');
            var $animationType = ' ' + $this.data('animation');
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay,
                'animation-duration':$animationDuration
            });
            $this.addClass($animationType).one(animationEndEvents, function() {
                $this.removeClass($animationType);
            });
        });
    }

    $('.stages-slider').on('init', function(e, slick) {
        var $firstAnimatingElements = $('.section-item:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);
    });

    $('.stages-slider').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('.section-item[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        doAnimations($animatingElements);
    });


    $('.section-stages .stages-slider .section-item h2')
        .waypoint(function(dir){
            if(dir === 'down'){
                $('.section-stages .stages-slider .section-item h2').removeClass('fadeOutDown');
                $('.section-stages .stages-slider .section-item .section-item-desc').removeClass('fadeOutDown');
                var $firstAnimatingElements = $('.section-item.slick-active').find('[data-animation]');
                var $firstAnimatingElementsTwo = $('.section-stages .stages-slider .section-item .section-item-desc').find('[data-animation]');
                doAnimations($firstAnimatingElements);
                doAnimations($firstAnimatingElementsTwo);
            }else if(dir === 'up'){
                $('.section-stages .stages-slider .section-item h2').addClass('fadeOutDown ');
                $('.section-stages .stages-slider .section-item .section-item-desc').addClass('fadeOutDown ');
            }
        },{
            offset: '90%'
        });
    $('.section-stages .stages-slider .section-item h2')
        .waypoint(function(dir){
            if(dir === 'down'){
                $('.section-stages .stages-slider .section-item h2').addClass('fadeOutDown ');
                $('.section-stages .stages-slider .section-item .section-item-desc').addClass('fadeOutDown ');
            }else if(dir === 'up'){
                $('.section-stages .stages-slider .section-item h2').removeClass('fadeOutDown');
                $('.section-stages .stages-slider .section-item .section-item-desc').removeClass('fadeOutDown');
                var $firstAnimatingElements = $('.section-item.slick-active').find('[data-animation]');
                var $firstAnimatingElementsTwo = $('.section-stages .stages-slider .section-item .section-item-desc').find('[data-animation]');
                doAnimations($firstAnimatingElements);
                doAnimations($firstAnimatingElementsTwo);
            }
        },{
            offset: -50	// в самом низу экрана
        });

if(!isMobile){
    $('.section-calculation')
        .waypoint(function(dir){
            if(dir === 'down'){
                $('.calc-form').removeClass('fadeOut');
                var $firstAnimatingElements = $('.calc-form').find('[data-animation]');
                doAnimations($firstAnimatingElements);
            }else if(dir === 'up'){
                $('.calc-form').addClass('fadeOut ');
            }
        },{
            offset: '90%'
        });
    $('.section-calculation')
        .waypoint(function(dir){
            if(dir === 'down'){
                $('.calc-form').addClass('fadeOut ');
            }else if(dir === 'up'){
                $('.calc-form').removeClass('fadeOut');
                var $firstAnimatingElements = $('.calc-form').find('[data-animation]');
                doAnimations($firstAnimatingElements);
            }
        },{
            offset: '-50%'	// в самом низу экрана
        });
}
if(!isMobile){
    $('.section-advantage')
        .waypoint(function(dir){
            if(dir === 'down'){
                $('.advantage-item').removeClass('fadeOut');
                var $firstAnimatingElements = $('.advantage-item').find('[data-animation]');
                doAnimations($firstAnimatingElements);
            }else if(dir === 'up'){
                $('.advantage-item').addClass('fadeOut ');
            }
        },{
            offset: '90%'
        });
    $('.section-advantage')
        .waypoint(function(dir){
            if(dir === 'down'){
                $('.advantage-item').addClass('fadeOut ');
            }else if(dir === 'up'){
                $('.advantage-item').removeClass('fadeOut');
                var $firstAnimatingElements = $('.advantage-item').find('[data-animation]');
                doAnimations($firstAnimatingElements);
            }
        },{
            offset: '-90%'	// в самом низу экрана
        });
}
if(!isMobile){
    $('.section-developments')
        .waypoint(function(dir){
            if(dir === 'down'){
                $('.developments-item').removeClass('fadeOut');
                var $firstAnimatingElements = $('.developments-item').find('[data-animation]');
                doAnimations($firstAnimatingElements);
            }else if(dir === 'up'){
                $('.developments-item').addClass('fadeOut ');
            }
        },{
            offset: '90%'
        });
    $('.section-developments')
        .waypoint(function(dir){
            if(dir === 'down'){
                $('.developments-item').addClass('fadeOut');
            }else if(dir === 'up'){
                $('.developments-item').removeClass('fadeOut');
                var $firstAnimatingElements = $('.developments-item').find('[data-animation]');
                doAnimations($firstAnimatingElements);
            }
        },{
            offset: '-50%'	// в самом низу экрана
        });
}


    $('.section-company')
        .waypoint(function(dir){
            if(dir === 'down'){
                $('.section-company .wrapper').addClass('fadeOut');
            }else if(dir === 'up'){
                $('.section-company .wrapper').removeClass('fadeOut');
                var $firstAnimatingElements = $('.section-company .wrapper').find('[data-animation]');
                doAnimations($firstAnimatingElements);
            }
        },{
            offset: '-50%'	// в самом низу экрана
        });

    $('.about-text')
    .waypoint(function(dir){
        if(dir === 'down')
            $(this.element)
                .addClass('fadeIn') // появление снизу
                .removeClass('fadeOut');    // исчезновение сверху
        else
            $(this.element)
                .addClass('fadeOut')
                .removeClass('fadeIn');
    },{
        offset: '90%'   // в самом низу экрана
    });

    $('.about-text').waypoint(function(dir){
        if(dir === 'down')
            $(this.element)
                .removeClass('fadeIn')
                .addClass('fadeOut');
        else
            $(this.element)
                .removeClass('fadeOut')
                .addClass('fadeIn');
    },{
        offset: -50 // в самом низу экрана
    });

    $('.about-slider')
        .waypoint(function(dir){
            if(dir === 'down')
                $(this.element)
                    .addClass('fadeIn') // появление снизу
                    .removeClass('fadeOut');    // исчезновение сверху
            else
                $(this.element)
                    .addClass('fadeOut')
                    .removeClass('fadeIn');
        },{
            offset: '90%'   // в самом низу экрана
        });
        
    $('.about-slider').waypoint(function(dir){
        if(dir === 'down')
            $(this.element)
                .removeClass('fadeIn')
                .addClass('fadeOut');
        else
            $(this.element)
                .removeClass('fadeOut')
                .addClass('fadeIn');
    },{
        offset: -150    // в самом низу экрана
    });




    $('.stages-slider').slick({
        swipe: false,
        dots: true,
        fade: true,
        prevArrow: $('.section-stages .slider-arrow-left'),
        nextArrow: $('.section-stages .slider-arrow-right'),
        responsive: [
            {
                breakpoint: 993,
                settings: {
                    swipe: true,
                }
            }
        ]
    });

    $('.partners-slider').slick({
        swipe: false,
        dots: false,
        slidesToShow: 5,
        prevArrow: $('.partners .slider-arrow-left'),
        nextArrow: $('.partners .slider-arrow-right'),
        responsive: [
            {
                breakpoint: 1201,
                settings: {
                    slidesToShow: 5,
                }
            },{
                breakpoint: 993,
                settings: {
                    swipe: true,
                    slidesToShow: 4,
                }
            },{
                breakpoint: 769,
                settings: {
                    swipe: true,
                    slidesToShow: 3,
                }
            },{
                breakpoint: 577,
                settings: {
                    swipe: true,
                    slidesToShow: 2,
                }
            },{
                breakpoint: 461,
                settings: {
                    swipe: true,
                    slidesToShow: 1,
                }
            }
        ]
    });


    $('select.name').multipleSelect({
        placeholder: "",
        allSelected: false,
        selectAllText: 'Выбрать все',
        selectAll: false,
        single: true,
        selectAllDelimiter: ['',''],
        countSelected: '|# of % selected|',
        ellipsis: true,
        maxHeight: ''
    });
    $('select.amount').multipleSelect({
        placeholder: '',
        allSelected: false,
        selectAllText: 'Выбрать все',
        selectAll: false,
        single: true,
        selectAllDelimiter: ['',''],
        countSelected: '|# of % selected|',
        ellipsis: true,
        maxHeight: ''
    });

    $('.ms-drop ul').addClass('nostyle-list');

    var PlaceholdersHandler = function() {
        var inputSelector = $('.form-row input'),
            placeholderSelector = '.form-placeholder';

        inputSelector.each(function(index, element) {
            if ($(element).val()) {
                $(element).prev(placeholderSelector).addClass('active');
            }
        });
        inputSelector.on('focus', function() {
            $(this).prev(placeholderSelector).addClass('active');
        });
        inputSelector.on('focusout', function() {
            var input = $(this);
            setTimeout(function() {
                if (!input.val()) {
                    input.prev(placeholderSelector).removeClass('active');
                }
            }, 100);
        });


        $('.ms-choice').on('focus', function(){
            $(this).parents('.form-row').find(placeholderSelector).addClass('active');
        });

        $('.ms-choice').on('focusout', function(){
            var input = $(this);
            setTimeout(function() {
                if (!input.find('span').text()) {
                    input.parents('.form-row').find(placeholderSelector).removeClass('active');
                }
            }, 200);
        });

         $(document).on('wpcf7mailsent', function(event) {
            var wpcf7 = $(event.target);
            var formId = event.detail.contactFormId;
    
            var input = inputSelector;
            setTimeout(function() {
                if (!input.val()) {
                    input.prev(placeholderSelector).removeClass('active');
                }
            }, 100);
            
            var inputTwo = $('.ms-choice');
            setTimeout(function() {
                if (!inputTwo.find('span').text()) {
                    inputTwo.parents('.form-row').find(placeholderSelector).removeClass('active');
                }
            }, 200);
        });

        $('input[type="tel"]').mask('+7-999-999-9999', { 'placeholder': '+7-___-___-____' });

    };
    PlaceholdersHandler();

    if(isMobile){

        $('.animated ').removeClass('animated ');
        $('.fadeIn ').removeClass('fadeIn ');
        $('.fadeOut ').removeClass('fadeOut ');
        $('.fadeInUp  ').removeClass('fadeInUp  ');
       
        $('.advantage-list  ').removeAttr('data-aos');
        $('.section-company *').removeAttr('data-aos');
        $('[data-animation]').removeAttr('data-animation');
   }


    // $('.inner-page .dropdown-inner-list li').on('click', function(){
    //     $('.dropdown-inner-list li>ul').stop().slideToggle(300);
    // });


    $('#scroll-top').click(function(e){
        $('html,body').animate({scrollTop: 0}, 'slow');
        return false;
    });
    if($(window).scrollTop()<750){
        $('#scroll-top').css('opacity', '0');
        $('#scroll-top').css('visibility', 'hidden');
    }else{
        $('#scroll-top').css('opacity', '1');
        $('#scroll-top').css('visibility', 'visible');
    }


    $('[data-toolbar]').on('click',function(){
        $('.'+ $(this).data('toolbar') ).toggleClass('open');
        $('.modal-overlay').css({
            "opacity": 1,
            "visibility": "visible",
        });
        $('html,body').animate({scrollTop: 0}, 'slow');
    });

    $('.section-company .modal__close').on('click',function(){
        $('.form-commercial').removeClass('open');
        $('.modal-overlay').css({
            "opacity": 0,
            "visibility": "hidden",
        });
    });

    $(document).on('click', function(e) {
        if( !$(e.target).closest(".form-commercial").length && !$(e.target).closest('[data-toolbar]').length) {
            $('.form-commercial').removeClass('open');
            $('.modal-overlay').css({
                "opacity": 0,
                "visibility": "hidden",
            });
        }
        e.stopPropagation();
    });


    $('[data-target="#modalVideo"]').click(function(){
        $('#modalVideo').on('hidden.bs.modal', function () {
            $('#modalVideo').find('iframe').attr('src', '');
        });
        var linkVideo = $(this).data('link-video');
        var linkVideoSplit = linkVideo.split('/');
        var linkVideoNew = linkVideoSplit[linkVideoSplit.length - 1];

        $('#modalVideo').find('iframe').show().attr('src', 'http://www.youtube.com/embed/'+linkVideoNew+'?rel=0&autoplay=1&amp;showinfo=0?ecver=2');

        setTimeout(function(){
            $('.modal-backdrop').toggleClass('modalVideoActive');
        }, 0001)
    });
    $('#modalVideo.modal').on('shown.bs.modal', function () {
        $(document).mouseup(function (e){ // событие клика по веб-документу
            var div = $(".modal .content-modal iframe"); // тут указываем ID элемента
            if (!div.is(e.target) // если клик был не по нашему блоку
                && div.has(e.target).length === 0) { // и не по его дочерним элементам
                $('#modalVideo.modal .modal__close').click();
            }
        });
    });



    $('[data-target="#modalMap"]').click(function(){
        setTimeout(function(){
            $('.modal-backdrop').toggleClass('modalVideoActive');
        }, 0001)
    });

    $('#modalMap.modal').on('shown.bs.modal', function () {
        $(document).mouseup(function (e){ // событие клика по веб-документу
            var div = $(".modal .content-modal #map"); // тут указываем ID элемента
            if (!div.is(e.target) // если клик был не по нашему блоку
                && div.has(e.target).length === 0) { // и не по его дочерним элементам
                $('#modalMap.modal .modal__close').click();
            }
        });
    });

    $('.open-sub-menu').on('click', function (e) {
        e.preventDefault();
        $('.open-sub-menu').not($(this)).removeClass('minus').next('ul').slideUp().removeClass('on');
        $(this).toggleClass('minus').next('ul').slideToggle().toggleClass('on');
    });


    $(window).on('scroll resize orienationchange', function() {

        $('.modal-fullscreen-menu .list-group li ul').removeAttr('style');
        if (window.matchMedia('(max-width: 768px)').matches){
          $('.open-sub-menu').removeClass('minus');
        }

        //Вверху - скрываем кнопку scrollTop
        var wScroll = $(this).scrollTop();
        if(wScroll<750){
            $('#scroll-top').css('opacity', '0');
            $('#scroll-top').css('visibility', 'hidden');
        }else{
            $('#scroll-top').css('opacity', '1');
            $('#scroll-top').css('visibility', 'visible');
        }

    // $(window).on('resize orienationchange', function() {
    //     $('.form-commercial.open').removeClass('open');
    // });

    // $(window).height() < 860




    });

});


$(window).on('load resize orienationchange',function(){

    if($(".section-company h1").length){
        if (window.matchMedia('(max-width: 1600px) and (min-width: 993px)').matches){
            var positionWrapper = $(".section-company h1").offset().left+60;
        }else{
            var positionWrapper = $(".section-company h1").offset().left;
        }
        setTimeout(function(){
            $(".services-item-text, .services-slider .slick-dots, .stages-slider .slick-dots").css({
                "padding-left" : positionWrapper
            });
        },100);
    }
});
$(window).on('resize orienationchange',function(){
    $('.dropdown-inner-list li>ul').slideUp(300);
});

$(window).on('load',function(){
    setTimeout(function(){
        $('body').css({
            'opacity':'1',
            'visibility':'visible',
        });
    },100);

    $('.inner-page .dropdown-inner-list li').on('click', function(){
        $('.dropdown-inner-list li>ul').stop().slideToggle(300);
    });

    // $('.inner-page table a img').parent('a').attr('data-fancybox', 'gallery');
    // $('.inner-page  p a img').parent('a').attr('data-fancybox', 'gallery');
    $('.zoom-img').parent('a').attr('data-fancybox', 'gallery');
    

    if(!isMobile){
        AOS.refresh();
    }else{
         $('.developments-item-wrap-text').css({
            'background':'#e9edf1',
            'height':'52%',
        });
        $('.developments-item-title').css({
            'color':'#121216',
        });    
        $('.developments-item-date').css({
            'color':'#1064ba',
        });
         $('.arrow').css({
            'opacity':'0',
        }); 
    }

});