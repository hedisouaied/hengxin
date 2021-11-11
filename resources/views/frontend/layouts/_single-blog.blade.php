@foreach ($blogs as $item)
<div class="col-lg-12 col-md-12 col-xs-12">
    <div class="news-item news-item-sm">
        <a href="{{route('blog.detail',$item->slug)}}" class="news-img-link">
            <div class="news-item-img">
                <img class="resp-img" src="{{$item->photo}}" alt="{{$item->title}}">
            </div>
        </a>
        <div class="news-item-text">
            <a href="{{route('blog.detail',$item->slug)}}"><h1 style="font-size: 24px">{{$item->title}}</h1></a>
            <div class="dates">
                <span class="date">@php
                    $date = date('Y-m-d',strtotime($item->updated_at));
                    setlocale (LC_TIME, 'fr_FR.utf8','fra');
                    echo (strftime("%A %d %B",strtotime($date)));
                @endphp &nbsp;</span>

            </div>
            <div class="news-item-descr">
                <p>{!! substr(strip_tags($item->description),0,250)!!}...</p>
            </div>
            <div class="news-item-bottom">
                <a href="{{route('blog.detail',$item->slug)}}" class="news-link">Voir plus...</a>
                <div class="admin">
                    <p>By, Hengxin</p>
                    <img src="{{asset('frontend/images/logo hengxin black.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
