@extends('layouts.main')

{{-- @section('title')
    Новости
@endsection --}}

@section('title')
    @parent Новости
@endsection

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <h2 class="">Новости</h2>

    <div class="row row-cols-1 row-cols-md-4">
    @forelse ($news as $item)
        <div class="col mb-4">
            <div class="card h-100">
                <img src="https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['title'] }}</h5>
                    @if (!$item['is_private'])
                        <a class="btn btn-primary" href="{{ route('news.one', $item['id']) }}">Подробнее...</a> 
                    @endif
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-warning" role="alert">
            Нет новостей
        </div>
    @endforelse
    </div>
@endsection


