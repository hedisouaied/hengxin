@extends('frontend.layouts.master')

@section('content')

<!-- START SECTION BLOG -->
<section class="blog-section" style="padding-top: 10rem;">
    <div class="container">
        <div class="news-wrap">
            <div class="row" id="product-data">
                @include('frontend.layouts._single-blog')
            </div>
            <div class="ajax-load text-center" style="display: none">
                <img src="{{asset('frontend/images/loading.gif')}}" style="width: 30%;" >
            </div>
        </div>

    </div>
</section>
<!-- END SECTION BLOG -->

@endsection
@section('scripts')
<script>
    function loadmoreData(page) {
        $.ajax({
            url: '?page='+page,
            type: 'GET',
            beforeSend: function () {
                $('.ajax-load').show();
            },
        }).done(function(data){

            if(data.html == ''){
                $('.ajax-load').html('');
                return;
            }
            $('.ajax-load').hide();
            $('#product-data').append(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError) {
            console.log('Somethong went wrong!! please try again');
        });
    }
    var page=1;
    $(window).scroll(function () {
        if($(window).scrollTop() +$(window).height()+420>=$(document).height()){
            page ++;
            loadmoreData(page);
        }
    });


</script>
@endsection
