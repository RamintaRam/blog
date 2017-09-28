<?php namespace App\Http\Controllers;

use App\BlogPosts;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class BlogPostsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /blogposts
     *
     * @return Response
     */
    public function index()
    {

        $config['list'] = BlogPosts::get()->toArray();
        $config['user'] = Auth::user()->id;
//        $config['new'] = 'app.post.create';
        $config ['title'] = 'Posts';
        $config['edit'] = 'app.posts.edit';
        $config['delete'] = 'app.posts.delete';
        $config['route'] = route('app.posts.create');
//dd($config);

        return view('posts', $config);


    }

    /**
     * Show the form for creating a new resource.
     * GET /blogposts/create
     *
     * @return Response
     */
    public function create()
    {


        $config['form'] = 'Post';
        $config['route'] = route('app.posts.create');
        $config['back'] = route('app.posts.index');


        return view('create-post', $config);
    }

    /**
     * Store a newly created resource in storage.
     * POST /blogposts
     *
     * @return Response
     */
    public function store()
    {
        $data = request()->all();
        $resources = request()->file('file');
        $uploadFile = new BlogResourcesController();
        $record = $uploadFile->upload($resources);

        $data['resource_id'] = $record->id;
        $record = BlogPosts::create($data);


        return redirect()->route('app.posts.create', [$record->id]);
    }

    /**
     * Display the specified resource.
     * GET /blogposts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     * GET /blogposts/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $config['id'] = $id;
        $config['form'] = $id;
        $config['back'] = route('app.post.index');
        $config['record'] = BlogPosts::find($id)->toArray();
        $config['route'] = route('app.post.edit', $id);

        return view('create-post', $config);
    }

    /**
     * Update the specified resource in storage.
     * PUT /blogposts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /blogposts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}