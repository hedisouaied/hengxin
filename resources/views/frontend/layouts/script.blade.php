    <!-- ARCHIVES JS -->
    <script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/rangeSlider.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
    <script src="{{asset('frontend/js/tether.min.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/moment.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/mmenu.min.js')}}"></script>
    <script src="{{asset('frontend/js/mmenu.js')}}"></script>
    <script src="{{asset('frontend/js/aos.js')}}"></script>
    <script src="{{asset('frontend/js/aos2.js')}}"></script>
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <script src="{{asset('frontend/js/nice-select.js')}}"></script>
    <script src="{{asset('frontend/js/fitvids.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/typed.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('frontend/js/lightcase.js')}}"></script>
    @yield('upscripts')
    <script src="{{asset('frontend/js/timedropper.js')}}"></script>
        <script src="{{asset('frontend/js/datedropper.js')}}"></script>
        <script src="{{asset('frontend/js/leaflet.js')}}"></script>
        <script src="{{asset('frontend/js/leaflet-gesture-handling.min.js')}}"></script>
        <script src="{{asset('frontend/js/leaflet-providers.js')}}"></script>
        <script src="{{asset('frontend/js/leaflet.markercluster.js')}}"></script>
        <script src="{{asset('frontend/js/map-single.js')}}"></script>
    <script src="{{asset('frontend/js/light.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/popup.js')}}"></script>
    <script src="{{asset('frontend/js/searched.js')}}"></script>
    <script src="{{asset('frontend/js/ajaxchimp.min.js')}}"></script>
    <script src="{{asset('frontend/js/newsletter.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.form.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('frontend/js/forms-2.js')}}"></script>
    <script src="{{asset('frontend/js/inner.js')}}"></script>
    <script src="{{asset('frontend/js/color-switcher.js')}}"></script>
    <script>
        $(window).on('scroll load', function() {
            $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
        });

    </script>

     <!-- Date Dropper Script-->
     <script>
        $('#reservation-date').dateDropper();

    </script>
    <!-- Time Dropper Script-->
    <script>
        this.$('#reservation-time').timeDropper({
            setCurrentTime: false,
            meridians: false,
            primaryColor: "#e8212a",
            borderColor: "#e8212a",
            minutesInterval: '15'
        });

    </script>

    <script>
        $(document).ready(function() {
            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });

    </script>

    <script>
        $('.slick-carousel').each(function() {
            var slider = $(this);
            $(this).slick({
                infinite: true,
                dots: false,
                arrows: false,
                centerMode: true,
                centerPadding: '0'
            });

            $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                slider.slick('slickPrev');
            });
            $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                slider.slick('slickNext');
            });
        });

    </script>

    <script>
        $('.slick-lancers').slick({
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            adaptiveHeight: true,
            responsive: [{
                breakpoint: 1292,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false
                }
            }, {
                breakpoint: 993,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false
                }
            }, {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            }]
        });

    </script>

    <!-- Slider Revolution scripts -->
    <script src="{{asset('frontend/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('frontend/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- MAIN JS -->
    <script src="{{asset('frontend/js/script.js')}}"></script>
    <script>
        $(document).ready(function () {
                $('.add-to-news-btn').click(function (e) {
                    e.preventDefault();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    var news_id = $(this).closest('.news_data').find('.news_id').val();
                    //alert(news_id);
                    $.ajax({
                        url:"{{route('addtonews.status')}}",
                        method: "POST",
                        data: {
                            _token:'{{csrf_token()}}',
                            'email': news_id,
                        },
                        success: function (response) {
                            if(response.condition == 'no'){
                                alertify.set('notifier','position','bottom-right');
                           alertify.error(response.status);
                           $('.news_id').val('');
                            }else{
                                alertify.set('notifier','position','bottom-right');
                           alertify.success(response.status);
                           $('.news_id').val('');
                            }
                           // alert(response.status)

                        }
                    });
                });
            });
    </script>
    <script>
        $(document).ready(function () {
                $('.add-to-cart-btn').click(function (e) {
                    e.preventDefault();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    var product_id = $(this).closest('.product_data').find('.product_id').val();

                    $.ajax({
                        url:"{{route('addtocart.status')}}",
                        method: "POST",
                        data: {
                            _token:'{{csrf_token()}}',
                            'product_id': product_id,
                        },
                        success: function (response) {
                            if(response.condition == 'no'){
                                alertify.set('notifier','position','bottom-right');
                           alertify.error(response.status);
                            }else{
                                alertify.set('notifier','position','bottom-right');
                           alertify.success(response.status);
                            }
                           // alert(response.status)

                           cartload();
                        }
                    });
                });
            });


            $(document).ready(function () {
                cartload();
            });

            function cartload()
            {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{route('loadtocart.status')}}",
                    method: "GET",
                    success: function (response) {
                        $('.basket-item-count').html('');
                        var parsed = jQuery.parseJSON(response)
                        var value = parsed; //Single Data Viewing
                        $('.basket-item-count').append($('<span>'+ value['totalcart'] +'</span>'));
                    }
                });
            }
        </script>

    @yield('scripts')
