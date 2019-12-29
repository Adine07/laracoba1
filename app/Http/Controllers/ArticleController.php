<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        $article = article::all();
        return view('article/index', compact('article'));
    }

    public function create(){
        return view('article/create');
    }

    public function store(Request $request){
        $data = new Article;
        $data-> title = $request->title;
        $data-> category_id = $request->category_id;
        $data-> content = $request->content;
        $data-> created_by = $request->created_by;
        $data-> status = $request->status;

        $data->save();

        return redirect('/article')->with('store','Berhasil menambahkan article baru');
    }

    public function edit($id){
        $article = Article::find($id);
        return view('article/edit',compact('article'));
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'name' => 'required'
        ]);

        $data = Article::find($id);
        $data->name = $request->name;
        $data->save();
        return redirect('article')->with('update', 'edit Berhasil');
    }

    public function delete($id){
        $data = Article::find($id);
        $data->delete();

        return redirect('article')->with('delete','Hapus Berhasil');
    }
}
