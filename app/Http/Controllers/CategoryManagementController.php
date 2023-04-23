<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryManagementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categories=Category::paginate(5);
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
    // update category
    public function edit($id){
        $category=Category::find($id);
        return view('dashboard.category.update',compact('category'));
    }

    public function update(Request $request,$id){
        $category=Category::findOrFail($id);
        $body=$request->validate(['title'=>'required','image'=>'required']);
        $title=$body['title'];

        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        $path='images/'.$imageName;
        
        $category->update(['title'=>$title,'pic'=>$path]);
        session()->flash('success', 'Suuecssfully Update Category');
        return redirect('dashboard/category');
    }

    

    public function delete($id){
        $category=Category::find($id)->delete();
        session()->flash('success', 'Suuecssfully Remove Category');
        return redirect('dashboard/category');
    }

}
