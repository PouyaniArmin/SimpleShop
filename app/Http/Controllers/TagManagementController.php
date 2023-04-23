<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagManagementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $tags = Tag::paginate(5);
        return view('dashboard.tagDashboard', compact('tags'));
    }
    public function create()
    {
        return view('dashboard.tag.create');
    }

    public function store(Request $request)
    {
        $tag = new Tag();
        $body = $request->validate(['title' => 'required']);
        $tag->title = $body['title'];
        $tag->save();
        session()->flash('success', 'Suuecssfully Add Category');
        return redirect('dashboard/tag');
    }

    // update tag

    public function edit($id)
    {
        $tag=Tag::find($id);
        return view('dashboard.tag.update',compact('tag'));
    }

    public function update(Request $request,$id)
    {
        $tag=Tag::findOrFail($id);
        $body=$request->validate(['title'=>'required']);
        $title=$body['title'];
        $tag->update(['title'=>$title]);
        session()->flash('success', 'Suuecssfully Update Tag');
        return redirect('dashboard/tag');
        
    }
    // delete
    public function delete($id)
    {   
        $tag=Tag::find($id)->delete();
        session()->flash('success', 'Suuecssfully Remove Tag');
        return redirect('dashboard/tag');
       
    }
}
