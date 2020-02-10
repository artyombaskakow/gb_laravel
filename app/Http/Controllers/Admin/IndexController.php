<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $homeRoute = route('home');
        $test1Route = route('admin.test1');
        $test2Route = route('admin.test2');

        return <<<php
            <a href="{$homeRoute}">Главная</a>
            <a href="{$test1Route}">Test1</a>
            <a href="{$test2Route}">Test2</a>
            <h1>Добро пожаловать Admin</h1>
        php;
    }

    public function test1(){
        $homeRoute = route('home');
        $adminRoute = route('admin.admin');

        return <<<php
            <a href="{$homeRoute}">Главная</a>
            <a href="{$adminRoute}">Админка</a>
            <h1>Test1</h1>
        php;
    }

    public function test2(){
        $homeRoute = route('home');
        $adminRoute = route('admin.admin');

        return <<<php
            <a href="{$homeRoute}">Главная</a>
            <a href="{$adminRoute}">Админка</a>
            <h1>Test2</h1>
        php;
    }
}
