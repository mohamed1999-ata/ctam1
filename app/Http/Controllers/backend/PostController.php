<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use LaravelLocalization;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::select('id',
        'picture',
        'title_' . LaravelLocalization::getCurrentLocale() . ' as title',
        'content_' . LaravelLocalization::getCurrentLocale() . ' as content'
    )->get();
        

        // On transmet les Post à la vue
        return view("admin.post.post", compact("posts"));
    }
  
    public function addpost()
    {
        return view ('admin.post.addpost');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title_ar' => 'bail|required|string|max:255',
            'title_en' => 'bail|required|string|max:255',
            "picture" => 'bail|required|image|max:1024',
            "content_ar" => 'bail|required',
            "content_en" => 'bail|required',
        ]);
    
        // 2. On upload l'image dans "/storage/app/public/posts"
        $chemin_image = $request->picture->store("posts");
    
        // 3. On enregistre les informations du Post
        Post::create([
            "picture" => $chemin_image,
            "title_ar" => $request->title_ar,
            "title_en" => $request->title_en,
            "content_ar" => $request->content_ar,
            "content_en" => $request->content_en,
        ]);
    
        // 4. On retourne vers tous les posts : route("posts.index")
        return redirect('admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
   {
     

    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit( Post $post )
    {
        
        return view("admin.post.editpost", compact("post"));
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // 1. La validation

    // Les règles de validation pour "title" et "content"
    $rules = [
        'title_ar' => 'bail|required|string|max:255',
        'title_en' => 'bail|required|string|max:255',
        "content_ar" => 'bail|required',
        "content_en" => 'bail|required',
    ];

    // Si une nouvelle image est envoyée
    if ($request->has("picture")) {
        // On ajoute la règle de validation pour "picture"
        $rules["picture"] = 'bail|required|image|max:1024';
    }

    $this->validate($request, $rules);

    // 2. On upload l'image dans "/storage/app/public/posts"
    if ($request->has("picture")) {

        //On supprime l'ancienne image
        Storage::delete($post->picture);

        $chemin_image = $request->picture->store("posts");
    }

    // 3. On met à jour les informations du Post
    $post->update([
        "title_ar" => $request->title,
        "title_en" => $request->title,
        "picture" => isset($chemin_image) ? $chemin_image : $post->picture,
        "content_ar" => $request->content,
        "content_en" => $request->content
    ]);

    // 4. On affiche le Post modifié : route("posts.show")
    return redirect('admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->picture);

    // On les informations du $post de la table "posts"
    $post->delete();

    // Redirection route "posts.index"
    return redirect('admin/posts');
    }
}
