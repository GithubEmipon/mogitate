@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css')}}">
@endsection

@section('content')
<div class="confirm-form">
    <h2 class="confirm-form__heading content__heading"></h2>
    <div class="confirm-form__inner">
        <form action="/register" method="post">
        @csrf
        <table class="confirm-form__table">
            <tr class="confirm-form__row">
            <th class="confirm-form__label">商品名</th>
            <td class="confirm-form__data"></td>
            <input type="hidden" name="name" value="{{ $register['name'] readonly }}">
            </tr>
            <tr class="confirm-form__row">
            <th class="confirm-form__label">値段</th>
            <td class="confirm-form__data"></td>
            <input type="hidden" name="price" value="{{ $register['price'] readonly }}">
            </tr>
            <tr class="confirm-form__row">
            <th class="confirm-form__label">商品画像</th>
            <td class="confirm-form__data"></td>
            <input type="file" name="image" value="{{ $register['image'] readonly }}">
            </tr>
            @foreach ($seasons as $season)
            <tr class="confirm-form__row">
            <th class="confirm-form__label">季節</th>
            <td class="confirm-form__data"></td>
            <input class="form-control" type="checkbox" name="name" value="{{ $register ['season_id'] }} readonly"> 春
            <input class="form-control" type="checkbox" name="name" value="{{ $register ['season_id'] }} readonly"> 夏
            <input class="form-control" type="checkbox" name="name" value="{{  $register ['season_id'] }} readonly  "> 秋
            <input class="form-control" type="checkbox" name="name" value="{{ $register['season_id'] }} readonly "> 冬
            </tr>
            @endforeach
            <tr class="confirm-form__row">
            <th class="confirm-form__label">商品説明</th>
            <td class="confirm-form__data"></td>
            <input type="hidden" name="description" value="{{ $register['description'] }} readonly ">
            </tr>
        </table>
        <div class="confirm-form__btn-inner">
            <input class="confirm-form__send-btn btn" type="submit" value="戻る" name="send">
            <input class="confirm-form__back-btn" type="submit" value="変更を保存" name="back">
        </div>
        </form>
    </div>
</div>
@endsection