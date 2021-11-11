@extends('frontend.layouts.master')

@section('content')
<!-- START SECTION BLOG -->
<section class="blog blog-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 blog-pots">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="news-item details no-mb2">
                            <a class="news-img-link">
                                <div class="news-item-img">
                                    <img class="img-responsive" src="{{$blog->photo}}" alt="{{$blog->title}}">
                                </div>
                            </a>
                            <div class="news-item-text details pb-0">
                                <a><h3>{{$blog->title}}</h3></a>
                                <div class="dates">
                                    <span class="date">@php
                                        $date = date('Y-m-d',strtotime($blog->updated_at));
                                        setlocale (LC_TIME, 'fr_FR.utf8','fra');
                                        echo (strftime("%A %d %B",strtotime($date)));
                                    @endphp &nbsp;</span>

                                </div>
                                <div class="news-item-descr big-news details visib mb-0" style="height: auto!important;">
                                    <p class="mb-3">{!!$blog->description!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="col-lg-3 col-md-12">
                @if (count(\App\Models\Blog::where('status','active')->where('id', '!=' ,$blog->id)->get())>0)


                <div class="widget">
                    <div class="recent-post pt-5">
                        <h5 class="font-weight-bold mb-4">Dérniers actualités</h5>
                        @foreach (\App\Models\Blog::where('status','active')->where('id', '!=' ,$blog->id)->get() as $recent_blogs)


                        <div class="recent-main my-4">
                            <div class="row">
                                <div class="col-lg-6">
                            <div class="recent-img">
                                <a href="{{route('blog.detail',$recent_blogs->slug)}}"><img style="object-fit: cover;width: 394px;height: 100px;" src="{{$recent_blogs->photo}}" alt="{{$recent_blogs->title}}"></a>
                            </div>
                                </div>
                                <div class="col-lg-6">
                            <div class="info-img">
                                <a href="{{route('blog.detail',$recent_blogs->slug)}}"><h6 title="{{$recent_blogs->title}}">{{substr($recent_blogs->title,0,30)}}...</h6>
                                </a>
                                <p>@php
                                    $date = date('Y-m-d',strtotime($recent_blogs->updated_at));
                                    setlocale (LC_TIME, 'fr_FR.utf8','fra');
                                    echo (strftime("%A %d %B",strtotime($date)));
                                @endphp &nbsp;</p>
                            </div>
                        </div>
                        </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </aside>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->
@endsection
