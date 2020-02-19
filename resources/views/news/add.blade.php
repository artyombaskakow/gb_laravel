@extends('layouts.main')

@section('title')
    @parent Добавления новости
@endsection

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <h2 class="">Добавление новости</h2>
    <form>
        <div class="form-group row">
            <label for="news__title" class="col-sm-2 col-form-label">Заголовок</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="news__title">
            </div>
        </div>
        <div class="form-group row">
            <label for="news__category" class="col-sm-2 col-form-label">Категория</label>
            <div class="col-sm-5">
            <select class="form-control" id="news__category">
                @foreach ($categories as $item)
                    <option value="{{ $item['id'] }}">{{$item['title']}}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="news__text" class="col-sm-2 col-form-label">Содержание новости</label>
            <div class="col-sm-5">
                <textarea class="form-control" id="news__text" rows="4"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="news__images" class="col-sm-2 col-form-label">Изображения</label>
            <div class="col-sm-5">
                <input type="file" class="form-control-file" id="news__images">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Доступ</div>
            <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="news__private">
                <label class="form-check-label" for="news__private">
                    Приватная новость
                </label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </form>
@endsection


