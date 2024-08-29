jQuery(document).ready( function($) {

    function init_slick (elem) {
        var pageSlider = elem;
        var pageSlides = pageSlider.find('.slide');

        if ( pageSlides.length > 1 ) {

            pageSlider.on( 'setPosition', function( slick ) {

                if ( typeof pageSlider.resizerQueue !== 'undefined' ) {
                    clearTimeout( pageSlider.resizerQueue );
                }

                pageSlider.resizerQueue = setTimeout( function() {
                    pageSlider.find('.slide').css( 'height', '' );
                    var setHeight = pageSlider.find('.slick-track').height();
                    pageSlides.height( setHeight );
                }, 200, pageSlider );
            });
            let centerMode =  pageSlider.data('centermode') === undefined ? false : Boolean( pageSlider.data('centermode') );
            let arrows =  pageSlider.data('arrows') === undefined ? true : Boolean( pageSlider.data('arrows') );
            let slidesToShow = (pageSlider.data('slidestoshow') === undefined ) ? 1 : parseInt( pageSlider.data('slidestoshow') ) ;
            var settings = {
                fade            : Boolean( pageSlider.data('fade') ),
                dots            : Boolean( pageSlider.data('dots') ),
                infinte         : Boolean( pageSlider.data('infinite') ),
                arrows          : arrows,
                speed           : parseInt( pageSlider.data('speed') ),
                autoplay        : Boolean( pageSlider.data('autoplay') ),
                autoplaySpeed   : parseInt( pageSlider.data('autoplay-speed') ),
                centerMode      : centerMode,
                slidesToShow    : slidesToShow,
                responsive: [
                    {
                        breakpoint  : 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            //arrows  : false,
                            //dots    : false,
                        }
                    },
                    {
                        breakpoint  : 680,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            //arrows  : false,
                            //dots    : false,
                        }
                    }
                ]
                /**
                 * responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 5,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }
                 */
            }
            pageSlider.slick( settings );
        }
    }
    if ( $('#page-slider').length ) {
        init_slick($('#page-slider'));
    }

    if ( $('.embedded-slider .slider').length ) {
        init_slick($('.embedded-slider .slider'));
    }
});