<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    private $news = [
        '1' => [
            'id' => 1,
            'title' => 'Новость 1',
            'text' => 'Новости 1 - хорошая новость',
            'cat_id' => 1,
            'is_private' => true,
            'images' => [
                'https://i.ytimg.com/vi/nd7Jfe3VbhI/maxresdefault.jpg',
                'https://ieshua.org/wp-content/uploads/2017/06/novost1.jpg',
                'https://www.cpgames.ru/images/projects/news/10.jpg'
            ],
        ],
        '2' => [
            'id' => 2,
            'title' => 'Новость 2',
            'text' => 'Новости 2 - плохая',
            'cat_id' => 1,
            'is_private' => true,
            'images' => [
                'https://i.ytimg.com/vi/nd7Jfe3VbhI/maxresdefault.jpg',
                'https://ieshua.org/wp-content/uploads/2017/06/novost1.jpg',
                'https://www.cpgames.ru/images/projects/news/10.jpg'
            ],
        ],
        '3' => [
            'id' => 3,
            'title' => 'Новость 3',
            'text' => 'Здесь весьма хорошие новости',
            'cat_id' => 1,
            'is_private' => false,
            'images' => [
                'https://i.ytimg.com/vi/nd7Jfe3VbhI/maxresdefault.jpg',
                'https://ieshua.org/wp-content/uploads/2017/06/novost1.jpg',
                'https://www.cpgames.ru/images/projects/news/10.jpg'
            ],
        ],
        '4' => [
            'id' => 4,
            'title' => 'Новость 4',
            'text' => 'Общество Общество Общество',
            'cat_id' => 3,
            'is_private' => false,
            'images' => [],
        ],
        '5' => [
            'id' => 5,
            'title' => 'Новость 5',
            'text' => 'Общественные новости',
            'cat_id' => 3,
            'is_private' => false,
            'images' => [
                'https://i.ytimg.com/vi/nd7Jfe3VbhI/maxresdefault.jpg',
                'https://ieshua.org/wp-content/uploads/2017/06/novost1.jpg',
                'https://www.cpgames.ru/images/projects/news/10.jpg'
            ],
        ],
        '6' => [
            'id' => 6,
            'title' => 'Новость 6',
            'text' => 'Бизнес малый, бизнес средний',
            'cat_id' => 4,
            'is_private' => false,
            'images' => [
                'https://i.ytimg.com/vi/nd7Jfe3VbhI/maxresdefault.jpg',
                'https://ieshua.org/wp-content/uploads/2017/06/novost1.jpg',
                'https://www.cpgames.ru/images/projects/news/10.jpg'
            ],
        ],
        '7' => [
            'id' => 7,
            'title' => 'Новость 7',
            'text' => 'Текст текст текст',
            'cat_id' => 5,
            'is_private' => false,
            'images' => [
                'https://i.ytimg.com/vi/nd7Jfe3VbhI/maxresdefault.jpg',
                'https://ieshua.org/wp-content/uploads/2017/06/novost1.jpg',
                'https://www.cpgames.ru/images/projects/news/10.jpg'
            ],
        ],
        '8' => [
            'id' => 8,
            'title' => 'Новость 8',
            'text' => 'Новости о театре',
            'cat_id' => 5,
            'is_private' => false,
            'images' => [
                'https://i.ytimg.com/vi/nd7Jfe3VbhI/maxresdefault.jpg',
                'https://ieshua.org/wp-content/uploads/2017/06/novost1.jpg',
                'https://www.cpgames.ru/images/projects/news/10.jpg'
            ],
        ],
        '9' => [
            'id' => 9,
            'title' => 'Новость 9',
            'text' => 'Новости обычные',
            'cat_id' => 5,
            'is_private' => false,
            'images' => [
                'https://i.ytimg.com/vi/nd7Jfe3VbhI/maxresdefault.jpg',
                'https://ieshua.org/wp-content/uploads/2017/06/novost1.jpg',
                'https://www.cpgames.ru/images/projects/news/10.jpg'
            ],
        ],
        '10' => [
            'id' => 10,
            'title' => 'Новость 10',
            'text' => 'Новости 10 - хорошая новость',
            'cat_id' => 1,
            'is_private' => false,
            'images' => [
                'https://i.ytimg.com/vi/nd7Jfe3VbhI/maxresdefault.jpg',
                'https://ieshua.org/wp-content/uploads/2017/06/novost1.jpg',
                'https://www.cpgames.ru/images/projects/news/10.jpg'
            ],
        ],
        '11' => [
            'id' => 11,
            'title' => 'Новость 11',
            'text' => 'Замечательные вести',
            'cat_id' => 1,
            'is_private' => false,
            'images' => [
                'https://i.ytimg.com/vi/nd7Jfe3VbhI/maxresdefault.jpg',
                'https://ieshua.org/wp-content/uploads/2017/06/novost1.jpg',
                'https://www.cpgames.ru/images/projects/news/10.jpg'
            ],
        ],
        '12' => [
            'id' => 12,
            'title' => 'Новость 12',
            'text' => 'Пенсионный возраст снова повысили',
            'cat_id' => 1,
            'is_private' => false,
            'images' => [
                'https://i.ytimg.com/vi/nd7Jfe3VbhI/maxresdefault.jpg',
                'https://ieshua.org/wp-content/uploads/2017/06/novost1.jpg',
                'https://www.cpgames.ru/images/projects/news/10.jpg'
            ],
        ],
    ];

    private $categories = [
        '1' => [
            'id' => 1,
            'name' => 'polytics',
            'title' => 'Политика',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXrhodxLmImJ6_U9kmuje--IVUR8gCAQBinJzlGp3e_MeVWO1oMQ&s',
            'description' => 'Описание категории политика',
        ],
        '2' => [
            'id' => 2,
            'name' => 'sports',
            'title' => 'Спорт',
            'cover' => 'https://disgustingmen.com/wp-content/uploads/2018/08/i.jpg',
            'description' => 'Описание категории спорт',
        ],
        '3' => [
            'id' => 3,
            'name' => 'social',
            'title' => 'Общество',
            'cover' => 'https://www.belrynok.by/wp-content/uploads/2019/08/rhBHWNXaSEo.jpg',
            'description' => 'Описание категории общество',
        ],
        '4' => [
            'id' => 4,
            'name' => 'economic',
            'title' => 'Экономика',
            'cover' => 'https://regnum.ru/uploads/pictures/news/2019/02/22/regnum_picture_1550846668630662_normal.jpg',
            'description' => 'Описание категории экономика',
        ],
        '5' => [
            'id' => 5,
            'name' => 'culture',
            'title' => 'Культура',
            'cover' => 'https://lh3.googleusercontent.com/proxy/TuwGXiLja7bZ6rimmhZnNddIPdE8s_8jDoa9P5s_XiIYpPlxl0bh-p1Y7T5wF4gQwVVZihskJZodEqT6oKnfJC68km-rGVSl_IhWXuT7G-2R5K6BQzmfNvvyPD2MdKskv7vRXqXTCxWj1E0FGg',
            'description' => 'Описание категории культура',
        ],
    ];

    public function getNews(){
        return $this->news;
    }

    public function getOne($id){
        return $this->news[$id];
    }

    public function getCategories(){
        return $this->categories;
    }

    public function getNewsByCategoryId($category_id){
        $news = [];

        foreach($this->news as $item){
            if($item['cat_id']==$category_id){
                $news[] = $item;
            }
        }

        return $news;
    }
}
