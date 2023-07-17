<?php

namespace App\Http\Controllers;

use App\accountant;
use Illuminate\Http\Request;
use App\articles;
use App\article_cats;
use App\Helpers;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $articles = articles::all();
        $article_cats = article_cats::all();

        $result=[
            'articles'=>$articles ,
            'article_cats'=>$article_cats ,
            'helper' =>Helpers::helperfunction1()
        ];

        return view('admin.articles',compact('result'));

    }

    public function store(Request $request)
    {
        if ($request->get('cat_name')){
            $this->store_article_cats($request);
        }
        if ($request->get('article_name')){
            $this->store_article($request);
        }


        return redirect('admin/articles')->with('success', 'Contact saved!');
    }

    public function store_article(Request $request)
    {
        $request-> validate([
            'article_name'=>'required',
            'article_category'=>'required',
            'article_text'=>'required',
            'article_pic'=>'required',
        ]);

        $articleModel = new articles();

        $imageName = $this->insert_pic('article_pic');
        $articleModel->pic = $imageName;
        $articleModel->title = $request->get('article_name');
        $articleModel->cat_id = $request->get('article_category');
        $articleModel->description = $request->get('article_text');

        $articleModel->save();
    }
    public function store_article_cats(Request $request)
    {
        $request-> validate([
            'cat_name'=>'required',
            'cat_description'=>'required',
        ]);

        $cats_model = new article_cats();

        $cats_model->title = $request->get('cat_name');
        $cats_model->description = $request->get('cat_description');

        $cats_model->save();
    }

    public function insert_pic( $field )
    {
        global $request;
        $imageName = time().'.'.$request->$field->extension();
        $request->$field->move(public_path('images'), $imageName);
        return $imageName;
    }


    public function destroyArticle(int $id)
    {
        articles::destroy($id);
        return redirect('admin/articles')->with('success', 'item deleted!');
    }
    public function destroyArticleCat(int $id)
    {
        article_cats::destroy($id);
        return redirect('admin/articles')->with('success', 'item deleted!');
    }
}
