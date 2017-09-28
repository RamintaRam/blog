<?php namespace App\Http\Controllers;

use App\BlogPosts;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class MyPostsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /yourposts
     *
     * @return Response
     */
    public function index()
    {
        $config['list'] = BlogPosts::get()->toArray();
        $config['user'] = Auth::user()->id;
        $config['edit'] = 'app.my-posts.edit';
        $config['delete'] = 'app.my-posts.delete';
        $config['route'] = route('app.my-posts.create');

        $config ['title'] = 'Posts';

//        dd($config);


        return view('my-posts');
    }

    /**
     * Show the form for creating a new resource.
     * GET /yourposts/create
     *
     * @return Response
     */
    public function create()
    {
        $config['form'] = 'Post';
        $config['route'] = route('app.my-posts.create');
        $config['back'] = route('app.my-posts.index');

        return view('create-post', $config);
    }

    /**
     * Store a newly created resource in storage.
     * POST /yourposts
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /yourposts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /yourposts/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /yourposts/{id}
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
     * DELETE /yourposts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}