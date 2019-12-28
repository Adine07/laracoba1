<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $category = category::all();
        return view('category/index', compact('category'));
    }

    public function create(){
        return view('category/create');
    }

    public function store(Request $request){
        $data = new Category;
        $data-> name = $request->name;

        $data->save();

        return redirect('/category')->with('store','Berhasil menambahkan category baru');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('category/edit',compact('category'));
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'name' => 'required'
        ]);

        $data = Category::find($id);
        $data->name = $request->name;
        $data->save();
        return redirect('category')->with('update', 'edit Berhasil');
    }

    public function delete($id){
        $data = Category::find($id);
        $data->delete();

        return redirect('category')->with('delete','Hapus Berhasil');
    }
}
