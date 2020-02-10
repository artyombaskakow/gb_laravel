<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    private $categories = [
        [
            'id' => 1,
            'name' => 'polytics',
            'title' => 'Политика'
        ],
        [
            'id' => 2,
            'name' => 'sports',
            'title' => 'Спорт'
        ],
        [
            'id' => 3,
            'name' => 'social',
            'title' => 'Общество'
        ],
        [
            'id' => 4,
            'name' => 'economic',
            'title' => 'Экономика'
        ],
        [
            'id' => 5,
            'name' => 'culture',
            'title' => 'Культура'
        ],
    ];

    private $news = [
        [
            'id' => 1,
            'title' => 'Новость 1',
            'text' => 'Новости 1 - хорошая новость',
            'cat_id' => 1
        ],
        [
            'id' => 2,
            'title' => 'Новость 2',
            'text' => 'Новости 2 - плохая',
            'cat_id' => 1
        ],
        [
            'id' => 3,
            'title' => 'Новость 3',
            'text' => 'Здесь весьма хорошие новости',
            'cat_id' => 1
        ],
        [
            'id' => 4,
            'title' => 'Новость 4',
            'text' => 'Общество Общество Общество',
            'cat_id' => 3
        ],
        [
            'id' => 5,
            'title' => 'Новость 5',
            'text' => 'Общественные новости',
            'cat_id' => 3
        ],
        [
            'id' => 6,
            'title' => 'Новость 6',
            'text' => 'Бизнес малый, бизнес средний',
            'cat_id' => 4
        ],
        [
            'id' => 7,
            'title' => 'Новость 7',
            'text' => 'Текст текст текст',
            'cat_id' => 5
        ],
        [
            'id' => 8,
            'title' => 'Новость 8',
            'text' => 'Новости о театре',
            'cat_id' => 5
        ],
        [
            'id' => 9,
            'title' => 'Новость 9',
            'text' => 'Новости обычные',
            'cat_id' => 5
        ],
        [
            'id' => 10,
            'title' => 'Новость 10',
            'text' => 'Новости 10 - хорошая новость',
            'cat_id' => 1
        ],
        [
            'id' => 11,
            'title' => 'Новость 11',
            'text' => 'Замечательные вести',
            'cat_id' => 1
        ],
        [
            'id' => 12,
            'title' => 'Новость 12',
            'text' => 'Пенсионный возраст снова повысили',
            'cat_id' => 1
        ],
    ];

    private function getMainMenu(){
        $homeRoute = route('home');
        $newsRoute = route('news');
        $adminRoute = route('admin.admin');

        return <<<php
            <a href="{$homeRoute}">Главная</a>
            <a href="{$newsRoute}">Новости</a>
            <a href="{$adminRoute}">Админка</a>
        php;
    }

    public function news()
    {
        $html = $this->getMainMenu();
        $html .= "<h1>Новости</h1>";

        foreach($this->categories as $cat){
            $html .= <<<php
                <a href="/news/{$cat['name']}">{$cat['title']}</a><br/>
            php;
        }

        return $html;
    }


    public function getCategory($cat_name){
        $html = $this->getMainMenu();
        $newsRoute = route('news');
        $cat = $this->getCategoryElemByName($cat_name);

        $news = $this->getNewsByCategoryId($cat['id']);

        if(empty($news)){
            $html .= <<<php
                <h3>Нет новостей по категории "{$cat['title']}"</h3>
            php;
        } else {
            $html .= <<<php
                <h3>Новости категории "{$cat['title']}"</h3>
            php;

            foreach($news as $n){
                $html .= <<<php
                    <a href="{$newsRoute}/{$cat['name']}/{$n['id']}">{$n['title']}</a><br/>
                php;
            }
        }

        return $html;
    }

    

    private function getCategoryElemByField($field, $value){
        foreach($this->categories as $cat){
            if($cat[$field] == $value){
                return $cat;
            }
        }
    }

    private function getCategoryElemByName($cat_name){
        return $this->getCategoryElemByField('name', $cat_name);
    }

    private function getCategoryElemById($cat_id){
        return $this->getCategoryElemByField('id', $cat_id);
    }


    private function getNewsByCategoryId($cat_id){
        $res = [];

        foreach($this->news as $n){
            if($n['cat_id'] == $cat_id){
                array_push($res, $n);
            }
        }

        return $res;
    }

    public function getNewsElem($cat_name, $id){
        $html = $this->getMainMenu();
        $newsElem = $this->getNewsElemById($id);
        $cat_link = $this->getCategoryLinkHTML($newsElem['cat_id']);

        if(!empty($newsElem)){
            $html .= <<<php
                <h2>{$newsElem['title']}</h2>
                <div>{$cat_link}</div>
                <p>{$newsElem['text']}</p>
            php;

            return $html;
        }

        return redirect(route('news'));
    }

    private function getCategoryLinkHTML($id){
        $newsRoute = route('news');
        $cat_elem = $this->getCategoryElemById($id);
        $link = $newsRoute . '/' . $cat_elem['name'];

        return <<<php
            <a href="{$link}">{$cat_elem['title']}</a>
        php;
    }

    private function getNewsElemById($id){
        foreach($this->news as $news){
            if($news['id']==$id){
                return $news;
            }
        }
    }
}
