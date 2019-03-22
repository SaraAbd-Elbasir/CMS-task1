<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\News;
use App\Category;
use Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function __construct()
    {
        
         $this->middleware('auth');
    }
    
    public function index()
    {
        
        $news = News::orderBy('created_at', 'DESC')->paginate(10);
        
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories=Category::all();
        return view('news.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'bail|required|min:3',
            'content' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
        //Current User
        $user = Auth::user();
        
        $new = new News();
        $new->title = $request->input('title');
        $new->category_id = $request->category_id;
        $new->content = $request->input('content');

        $new->user_id = $user->id;
        //Upload the featured image if any
        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $filename = time() .'-'. $photo->getClientOriginalName(); // we can use getClientOriginalExtention() & we used this line to be unique
            $location = public_path('images/news/'.$filename);
            Image::make($photo)->resize(800, 400)->save($location);
            
            $new->photo = $filename;
        }
 
        $new->save();
        
        return redirect('/news')->with('success','New Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::where('id',$id)->first();
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
        
         $news = News::find($id);
         $categories=Category::all();
        
        return view('news.edit', compact('news','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $request->validate([
            'title' => 'bail|required|min:3',
            'content' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $news = News::find($id);
        $news->title = $request->input('title');
        $new->category_id = $request->category_id;
        $news->content = $request->input('content');
        $news->user_id = $user->id;
        //Upload the featured image if any
        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $filename = time() .'-'. $photo->getClientOriginalName(); // we can use getClientOriginalExtention() & we used this line to be unique
            $location = public_path('images/news/'.$filename);
            Image::make($photo)->resize(10, 10)->save($location);
            
            $news->photo = $filename;
        }

        
        
        $new->save();
        
        return redirect('/news'.$news->id)->with('success','New Updated Successfully');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        
        $news->delete();
        return redirect('/news')->with('success','News Deleted Successfully');
    }

    public function search(Request $request)
    {
      
        $search = $request->get('search');
        $news = News::where('title','like' ,'%' .$search .'%')->paginate(5);
    
            return view('search' , compact('news'));

        
        
        
    }
}
