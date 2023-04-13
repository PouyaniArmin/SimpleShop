<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryManagementController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('dashboard.categoryDashboard',compact('categories'));
    }
    public function create(){   
        return view('dashboard.category.create');
    }

    public function store(Request $request){
        $category=new Category();
        $this->validate($request, [
            'title'=>'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        $path='images/'.$imageName;
        $category->title=$request['title'];
        $category->pic=$path;
        $category->save();
        session()->flash('success','Suuecssfully Add Category');
        return redirect('dashboard/category');
        
    }

}
