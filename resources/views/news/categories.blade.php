@extends('layouts.main')

@section('title')
    @parent Категории новостей
@endsection

@section('menu')
    @include('menu.main')
@endsection

@section('content')
        <h1>Категории</h1>

        <div class="row row-cols-1 row-cols-md-3">
            @forelse ($categories as $item)
            <div class="col mb-4 ">
                <div class="card h-100">
                  <a href="{{route('news.categoryId', $item['name'])}}">
                    <img src="{{$item['cover']}}" class="card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{route('news.categoryId', $item['name'])}}">
                            {{$item['title']}}
                        </a>
                    </h5>
                    <p class="card-text">{{$item['description']}}</p>
                  </div>
                </div>
            </div>
            @empty
                <p>Нет категорий</p>
            @endforelse
        </div>
@endsection


