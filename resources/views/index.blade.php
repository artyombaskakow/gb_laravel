@extends('layouts.main')

@section('title')
    @parent Главная
@endsection

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <h1>Добро пожаловать {{ $name }}</h1>
@endsection