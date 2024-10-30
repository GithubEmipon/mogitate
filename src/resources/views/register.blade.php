@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('content')
<div class="register-form">
    <h2 class="register-form__heading content__heading">商品登録</h2>
    <div class="register-form__inner">
        <form class="form" action="/register/confirm"  method="post" enctype="multipart/form-data">
        @csrf
        <div class="register-form__group">
            <label class="register-form__label" for="name">商品名<span class="register-form__required">必須</span></label><br>
            <input class="register-form__input" type="text" name="name" id="name" placeholder="商品名を入力" value="{{ old('name') }}"/><br>
            <p class="register-form__error-message">
            @error('name')
            {{ $message }}
            @enderror
            </p>
        </div>
        <div class="register-form__group">
            <label class="register-form__label" for="price">値段<span class="register-form__required">必須</span></label><br>
            <input class="register-form__input" type="price" name="price" id="price" placeholder="値段を入力" value="{{ old('price') }}" /><br>
            <p class="register-form__error-message">
            @error('price')
            {{ $message }}
            @enderror
            </p>
        </div>
        <div id="preview" style="width: 300px;" class="register-form__group">
            <label class="register-form__label" for="image">商品画像<span class="register-form__required">必須</span></label><br>
                <input id="inputElm"  type="file" accept="image/png, image/jpeg" name="image" id="image" placeholder="ファイルを選択" value="{{ old('image') }}" />

                <br>
            <script>
                const inputElm =document.getElementById('inputElm');
                inputElm.addEventListener('change' ,(e) => {
                    const file = e.target.files(0);

                    const fileReader = new FileReader();
                    fileReader.readAsDataURL(file);

                    fileReader.addEventListener('load' , (e) => {
                        const imgElm =document.createElement('img');imgElm.src = e.target;

                        const targetElm =document.getElementById('preview');
                        targetElm.appendChild(imgElm);
                    });
                });
            </script>
            <p class="register-form__error-message">
                @error('image')
                {{ $message }}
                @enderror
            </p>

            </div>
        <div class="register-form__group">
            <label class="register-form__label" for="">季節<span class="register-form__required">必須</span>
            </label>複数選択可<br>
        <div class="register-form__select-inner">
            <input class="form-control" type="checkbox" name="seasons_id" value="{{ old('season_id') }}"/>春
            <input class="form-control" type="checkbox" name="seasons_id" value="{{ old('seasons_id') }}" />夏
            <input class="form-control" type="checkbox" name="seasons_id" value="{{ old('seasons_id') }}" />秋
            <input class="form-control" type="checkbox" name="seasons_id"  value="{{ old('seasons_id') }}"/>冬
            </select>
        </div>
            <br>
            <p class="register-form__error-message">
            @error('seasons_id')
            {{ $message }}
            @enderror
            </p>
        </div>
        <div class="register-form__group">
            <label class="register-form__label" for="description">
            商品説明<span class="register-form__required">必須</span>
            </label><br>
            <textarea class="register-form__textarea" name="description" id="" cols="30" rows="10"
            placeholder="商品の説明を入力" value="{{ old('description') }}" ></textarea>
            <br>
            <p class="register-form__error-message">
            @error('description')
            {{ $message }}
            @enderror
            </p>
        </div>
        </table>
        <div class="register-form__btn-inner">
            <input class="register-form__send-btn btn" type="submit" value="戻る" name="send">
            <input class="register-form__back-btn" type="submit" value="登録" name="back">
        </div>
        </form>
    </div>
</div>
@endsection