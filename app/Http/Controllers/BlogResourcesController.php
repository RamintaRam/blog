<?php namespace App\Http\Controllers;

use App\BlogResources;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Http\UploadedFile;

class BlogResourcesController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /blogresources
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    public function upload(UploadedFile $file)
    {
        $data =
            [
                "size" => $file->getsize(),
                "mime_type" => $file->getMimetype(),
            ];

        $path = '/upload/' . date("Y/m/d/");
        $fileName = Carbon::now()->timestamp . '_' . $file->getClientOriginalName();
        $file->move(public_path($path), $fileName);
        $data["path"] = $path . $fileName;

        return BlogResources::create($data);
    }

    /**
     * Show the form for creating a new resource.
     * GET /blogresources/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /blogresources
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /blogresources/{id}
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
     * GET /blogresources/{id}/edit
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
     * PUT /blogresources/{id}
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
     * DELETE /blogresources/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}