<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $homeRoute = route('home');
        $newsRoute = route('news');
        $adminRoute = route('admin.admin');

        return <<<php
<a href="{$homeRoute}">Главная</a>
<a href="{$newsRoute}">Новости</a>
<a href="{$adminRoute}">Админка</a>
<h1>Добро пожаловать</h1>
php;
    }

}
