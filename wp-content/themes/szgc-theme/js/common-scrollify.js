$(window).on('load', function(){

    $(function(){

        $('.inner-page div').removeAttr('data-section');

        var $win = $(window);
        var $doc = $(document);
        var $body = $('body');
        var $htmlBody = $('html, body').removeClass('no-js');
        var smPage = {
            clear: [],
            animateOut: false,
        };
        var $sideMenu = $('[data-side-menu]');







        $.extend($.easing,{ easeInOutCubic: function (x, t, b, c, d) {if ((t/=d/2) < 1) return c/2*t*t*t + b;return c/2*((t-=2)*t*t + 2) + b;}});
        window.scrollifyInitialized = false;
        var options = {
            section : '[data-section]',
            sectionName : false,
            interstitialSection : '[data-section="footer"]',
            easing: 'easeInOutCubic',
            scrollSpeed: 700,
            offset : 0,
            scrollbars: true,
            standardScrollElements: '',
            setHeights: false,
            overflowScroll: false,
            before:function() {},
            after:function() {},
            afterResize:function() {},
            afterRender:function() {
                window.scrollifyInitialized = true;
                $body.addClass('is-fp-scrolling');
            }
        };
        $body.addClass('top-menu-fixed');
        function checkInit() {

            var width = $win.width();
            var height = $win.height();


            //При открытии модального окна, убиваем scrollify
                $('#modalNavigation').on('shown.bs.modal', function () {
                        $.scrollify.destroy();
                        window.scrollifyInitialized = false;
                });
                $('#modalNavigation').on('hidden.bs.modal', function () {
                    if ((window.matchMedia('(max-width: 992px)').matches || height < 860) && window.scrollifyInitialized) {
                        $.scrollify.destroy();
                        window.scrollifyInitialized = false;
                        $body.removeClass('is-fp-scrolling');
                        $body.addClass('top-menu-fixed');
                    } else if (window.matchMedia('(min-width: 993px)').matches && height > 860 && !window.scrollifyInitialized) {
                        $.scrollify(options);
                        window.scrollifyInitialized = true;
                        $body.addClass('is-fp-scrolling');
                        $body.removeClass('top-menu-fixed');
                    }
                });
            //-// При открытии модального окна, убиваем scrollify //-//

            if ((window.matchMedia('(max-width: 992px)').matches || height < 860) && window.scrollifyInitialized) {
                $.scrollify.destroy();
                window.scrollifyInitialized = false;
                $body.removeClass('is-fp-scrolling');
                $body.addClass('top-menu-fixed');
            } else if (window.matchMedia('(min-width: 993px)').matches && height > 860 && !window.scrollifyInitialized) {
                $.scrollify(options);
                window.scrollifyInitialized = true;
                $body.addClass('is-fp-scrolling');
                $body.removeClass('top-menu-fixed');
            }










        }




        $win.on('resize.smPage', UIkit.Utils.debounce(checkInit, 100));

        smPage.clear.push($.scrollify.destroy);


        checkInit();









        /**
         * Change all states on scrolling
         */
        var $sections = $('[data-section]');
        var $sectionLinks = $('[data-section-link]');
        var activeSectionName;
        $doc.on("scrolling.uk.document.smPage", checkActiveSection);
        $win.on("resize.smPage orientationchange.smPage", UIkit.Utils.debounce(checkActiveSection, 50));

        function checkActiveSection(e, data) {
            var scrollTop = data ? data.y : $win.scrollTop();
            var windowCenter = scrollTop + $win.height() / 2;
            var deltas = [];
            $sections.each(function (index, section) {
                var $thisSection = $(section);
                var sectionCenter = $thisSection.offset().top + $thisSection.outerHeight() / 2;
                deltas[index] = Math.abs(windowCenter - sectionCenter);
            });
            var minDelta = Math.min.apply(null, deltas);
            var activeIndex = deltas.indexOf(minDelta);
            var $activeSection = $sections.eq(activeIndex);

            activeSectionName = $activeSection.attr('data-section');
            $sectionLinks.removeClass('is-active is-active-disabled').filter('[data-section-link="' + activeSectionName + '"]').addClass('is-active');

            if (activeSectionName === 'footer') {
                $sideMenu.addClass('is-hidden');
            } else {
                $sideMenu.removeClass('is-hidden');
            }




            if(activeSectionName === 'section-advantage') {
                $('header .logo-wrap .logo').css('background', 'url(/wp-content/themes/szgc-theme/img/logo-b.png) center/contain no-repeat');
                $('header .phone-wrap .phone-title').css('color', 'rgb(73, 76, 82)');
                $('header .phone-wrap .phone').css('color', '#121216');
                $('.side__menu').addClass('advantage-style');

            }else if (activeSectionName === 'section-about') {
                // setTimeout(function(){
                //     if( $('.about-slider').hasClass('fadeIn')){
                //         $('.about-slider').slick('slickGoTo', 0);
                //         $('.about-slider').slick('refresh');
                //     }
                // },300);
            }else{
                $('header .logo-wrap .logo').css('background', 'url(/wp-content/themes/szgc-theme/img/logo.png) center/contain no-repeat');
                $('header .phone-wrap .phone-title').css('color', '#fff');
                $('header .phone-wrap .phone').css('color', '#fff');
                $('.side__menu').removeClass('advantage-style');

                // $('.about-slider').removeClass('aos-animate');


            }
        }
        // $(window).on('load', function(){
        checkActiveSection();
        // });



        /**
         * $sectionLinks
         */
        $sectionLinks.on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            var targetName = $(this).attr('data-section-link');
            var $targetSection = $('[data-section="' + targetName + '"]');
            scrollToSection($targetSection);
        });
        function scrollToSection($targetSection) {
            if (window.scrollifyInitialized) {
                var targetIndex = $sections.index($targetSection) + 1;
                $.scrollify.move('#' + targetIndex);
            } else {
                var targetOffset = $targetSection.offset().top;
                $htmlBody.animate({scrollTop: targetOffset}, options.scrollSpeed, options.easing);
            }
        }

        var hashName = location.hash.substr(1);
        var $targetSection  = $('[data-section="' + hashName + '"]');
        if ($targetSection.length) {
            setTimeout(function () {
                scrollToSection($targetSection);
            }, 200);
        }









    });
});