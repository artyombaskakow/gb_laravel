<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function news()
    {
        $news = new News();
        return view('news.all', ['news' => $news->getNews()]);
    }

    public function newsOne($id){
        $news = new News();

        if(array_key_exists($id, $news->getNews()))
            return view('news.one', ['news' => $news->getOne($id)]);
        else
            return redirect(route('news.all'));
    }

    public function categories(){
        $news = new News();
        return view('news.categories', ['categories' => $news->getCategories() ]);
    }
    
    public function categoryId($id){
        $news = new News();
        $categories = $news->getCategories();

        foreach($categories as $cat){
            if($cat['name']==$id) $id = $cat['id'];
        }

        if(array_key_exists($id, $categories)){
            $name = $categories[$id]['title'];
            return view('news.onecategory', ['news'=> $news->getNewsByCategoryId($id), 'category_name' => $name]);
        }
        else
            return redirect( route('news.categories') );
       
    }

    public function addNews(){
        $news = new News();

        return view('news.add', ['categories' => $news->getCategories() ]);
    }

}
