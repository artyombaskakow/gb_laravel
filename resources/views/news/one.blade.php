@extends('layouts.main')

@section('title')
    @parent Одна новость
@endsection

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <div class="container">
        @if (!$news['is_private'])
            <h2>{{ $news['title'] }}</h2>

            @if (isset($news['images']) && count($news['images']))
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-bottom: 30px;">
                    <div class="carousel-inner">
                        
                        @for ($i = 0; $i<count($news['images']); $i++)
                            <div class="carousel-item {{$i==0 ? 'active' : ''}}">
                                <img src="{{ $news['images'][$i] }}" class="d-block w-100" alt="">
                            </div>
                        @endfor
                        
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Назад</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Далее</span>
                    </a>
                </div>
            @endif

            <div>
                <p>{{ $news['text'] }}</p>
            </div>
                
        @else
            <div class="alert alert-warning" role="alert">
                Нет прав на просмотр данной новости
            </div>
        @endif
    </div>
@endsection



