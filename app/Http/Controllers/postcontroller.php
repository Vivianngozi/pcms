<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreatePostRequest;

use App\Models\Post;

class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        // $posts = Post::all();

        // $posts = Post::latest()->get();

        // $posts = Post::orderBy('id', 'desc')->get();

        // $posts = Post::orderBy('id', 'asc')->get();

        $posts = Post::last();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //saving files

// the name of the file is 'file'

        // $file = $request->file('file');


        // echo $file->getClientOriginalName() . '<br>';




        $input = $request->all();

        if($file = $request->file('file')){
            
            $name = $file->getClientOriginalName();

            $file->move('images', $name);
// name in database
            $input['path'] = $name;

            Post::create($input);
        }



        // $this->validate($request, [
        //     'title'=> 'required',
        //     'content'=> 'required'
        // ]);

        // return $request->all();

        // return $request->get('title');
        //or

        // return $request->title . "<br>" . $request->content;

        // Post::class($request->all()); it did not work

        //or

        // $input = $request->all();

        // $input['title'] = $request->title;

        // $input['content'] = $request->content;

        // Post::create($request->all());

        //or

        // $post = new Post;
        // $post->title = $request->title;
        // $post->content = $request->content;

        // $post->save();

        // return redirect('/posts');

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // return "Thanks for all you do " . $id;

        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
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
        //

        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect('/posts');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $post = Post::whereId($id)->delete();

        return redirect('/posts');
    }

// custom
    public function contact() {

        $people = ['vivian', 'Joel', 'Lesley', 'Chioma'];
        return view('contact', compact('people'));
    }


    public function show_post($id,$name,$password) {
        // return view('post')->with('id',$id); or
        //compact is preferrable when passing multiple functions

        return view('post', compact('id','name', 'password'));
    }

    public function latest() {
        $items = ['Goat', 'Cow', 'Dog'];
        return view('latest', compact('items'));
    }

}


