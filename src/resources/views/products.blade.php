@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css')}}">
@endsection

@section('content')
    <div class="products-form">
        <div class="box1">
            <h2 class="products-form__heading content__heading">
            商品一覧</h2>
                <input class="products-form__plus-btn" type="submit" value="+商品を追加" name="plus">
        </div>
        <div class="products-form__inner-box">
        <form class="search-form" action="/search" method="get">
        @csrf
            <input class="search-form__keyword-input" type="text" name="keyword" placeholder="商品名で検索" value="{{request('keyword')}}">
                <div class="search-form__actions">
                    <input class="search-form__search-btn btn" type="submit" value="検索">
                </div>
                <div class="products-form__inner-box2"><p>価格順で表示</p>
            <select class="products-form__select" name="price" id="">
                <option disabled selected>価格で並べ替え</option>
            </select>
        </form>
    </div>
</div>

    <div class="products__item">
        <div class="products__card">
            <div class="product__img">
                <img src="../../public/img/kiwi.png" alt="" />
            </div>
            <div class="card__content">
                <div class="card__cat">キウイ</div>
                    <h2 class="card__ttl">¥800</h2>
            </div>
        </div>
        <div class="products__card">
            <div class="product__img">
                <img src="../../public/img/strawberry.png" alt="" />
            </div>
            <div class="card__content">
                <div class="card__cat">ストロベリー</div>
                <h2 class="card__ttl">¥1200</h2>
            </div>
        </div>
        <div class="products__card">
            <div class="product__img">
                <img src="../../public/img/orange.png" alt="" />
            </div>
            <div class="card__content">
                <div class="card__cat">オレンジ</div>
                <h2 class="card__ttl">¥850</h2>
            </div>
        </div>
        <div class="products__card">
            <div class="product__img">
                <img src="../../public/img/watermelon.png" alt="" />
            </div>
                <div class="card__content">
                <div class="card__cat">スイカ</div>
                <h2 class="card__ttl">¥700</h2>
            </div>
        </div>
        <div class="products__card">
            <div class="product__img">
                <img src="../../public/img/peach.png" alt="" />
            </div>
                <div class="card__content">
                <div class="card__cat">ピーチ</div>
                <h2 class="card__ttl">¥1000</h2>
                </div>
        </div>
        <div class="products__card">
            <div class="product__img">
                <img src="../../public/img/muscat.png" alt="" />
            </div>
                <div class="card__content">
                <div class="card__cat">シャインマスカット</div>
                <h2 class="card__ttl">¥1400</h2>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection