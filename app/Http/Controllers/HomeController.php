<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\File;
use Illuminate\Support\Facades\File as FileFacade;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;

        $data['articles'] = Post::where('user_id','=',$user)->paginate(15);

        return view('home', $data);
    }

    /**
     * Add New Post
     *
     * @return \Illuminate\Http\Response
     */
    public function AddPost()
    {
        return view('post');
    }

    /**
     * Validate Post
     */
    private function PostValidate($request, $img_required)
    {
        $this->validate($request, [
            'title'    => 'required',
            'content'  => 'required',
            'fileupload' => $img_required.'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

    /**
     * Store new post
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valudation
        $this->PostValidate($request,'');

        // Post Data
        $post['title'] = $request->title;
        $post['content'] = $request->content;
        $post['user_id'] = Auth::user()->id;
        $SavePost = new Post($post); $SavePost->save();

        // Check for errors in saving post
        if(!$SavePost->save())
        
        return back()->withErrors($SavePost->getErrors())->withInput();

        // File 
        if($request->hasFile('fileupload'))
        {
            // Set image file
            $image = $request->file('fileupload');
            $extension = $image->getClientOriginalExtension();
            Storage::disk('public')->put($image->getFilename().'.'.$extension,  FileFacde::get($image));
            // file data
            $file['post_id'] = $SavePost->id;
            $file['mime'] = $image->getClientMimeType();
            $file['original_filename'] = $image->getClientOriginalName();
            $file['filename'] = $image->getFilename().'.'.$extension;
            $SaveFile = new File($file);

            // Check for errors in saving files
            if (!$SaveFile->save())
            
            return back()->withErrors($SaveFile->getErrors())->withInput();

        }

        return redirect(route('home'))->with(['status' => "Article successfully added"]);
    }
}
