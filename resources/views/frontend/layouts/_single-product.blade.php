

@foreach ($products as $item)
@if (\App\Models\Category::where(['id' => $item->cat_id])->value('status') == 'active')
@if (\App\Models\Brand::where(['id' => $item->brand_id])->value('status') == 'active')


@php
    $photos = explode(",",$item->photo);
@endphp
<div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
    <a href="{{route('product.detail',$item->slug)}}" class="recent-16 aos-init aos-animate" data-aos="fade-up">
        @if ($item->fond=='fdc')
                                        <div style="line-height: 1.5;font-size: 13px;font-weight: 600;padding: 6px 14px;border-radius: 2px;color: #fff;border: none;display: inline-block;z-index: 1;text-align: center;" class="homes-tag button alt featured" title="Fond de commerce" >FDC</div>
        @endif
        @if ($item->conditions=='sale')
        <div style="line-height: 1.5;font-size: 13px;font-weight: 600;padding: 6px 14px;border-radius: 2px;color: #fff;border: none;display: inline-block;z-index: 1;text-align: center;" class="homes-tag button alt sale">à vendre</div>
            @elseif ($item->conditions=='rent')
            <div style="line-height: 1.5;font-size: 13px;font-weight: 600;padding: 6px 14px;border-radius: 2px;color: #fff;border: none;display: inline-block;z-index: 1;text-align: center;" class="homes-tag button sale rent">à louer</div>
        @endif
        <div class="recent-img16 img-center" style="background-image: url('{{$photos[0]}}');height: 450px;object-fit: cover;"></div>
        <div class="recent-content"></div>
        <div class="recent-details">
            <div class="recent-title">{{$item->title}}</div>
            @if ($item->conditions == 'rent')
            <div class="recent-price">€{{number_format($item->price)}}/mois</div>
            @elseif ($item->conditions == 'sale')
            <div class="recent-price">€{{number_format($item->price)}}</div>
            @endif

            <div class="house-details">Surface: {{$item->surface}} m² <span>|</span> Façade: {{$item->facade}} m </div>
            <div class="house-details">RDC: {{$item->rdc}} m² <span>|</span> 1<sup>er</sup> étage: {{$item->petage}} m²</div>
        </div>
        <div class="view-proper">Voir Détails</div>
    </a>
</div>
@endif
@endif
@endforeach

