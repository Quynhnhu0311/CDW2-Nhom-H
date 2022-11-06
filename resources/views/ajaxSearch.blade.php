@foreach($data as $pro)
<div class="search-result">
    <div><a href=""><img src="{{ asset('./img/product/'.$pro->product_img) }}" alt="" style="width: 50px;height:50px"></a></div>
    <div style="margin-left: 20px;">
        <a href="/shop-details/{{ $pro->product_id }}">{{$pro->product_name}}</a>
        <h6>{{Str::words(strip_tags($pro->product_description),7)}}</h6>
    </div>
</div>
@endforeach