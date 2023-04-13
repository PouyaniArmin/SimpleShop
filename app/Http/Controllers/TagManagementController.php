<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagManagementController extends Controller
{
    public function index(){
        $tags=Tag::all();
        return view('dashboard.tagDashboard',compact('tags'));
    }
    public function create(){
        return view('dashboard.tag.create');
    }

    public function store(Request $request){
        $tag=new Tag();
        $body=$request->validate(['title'=>'required']);
        $tag->title=$body['title'];
        $tag->save();
        session()->flash('success','Suuecssfully Add Category');
        return redirect('dashboard/tag');
    }
}
