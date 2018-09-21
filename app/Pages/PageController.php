<?php

namespace App\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    protected $locations;

    public function __construct(StorageLocationRegistry $locations)
    {
        $this->locations = $locations;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        $location = $this->locations->get($user->filesystem);

        return response()->json([
            'success' => true,
            'data' => $location->getAll()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        $location = $this->locations->get($user->filesystem);
        $location->create($id, $request->get('data'));

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = auth()->user();

        $location = $this->locations->get($user->filesystem);

        return response()->json([
            'success' => true,
            'data' => $location->getByLocation($id)
        ]);
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
        $user = auth()->user();

        $location = $this->locations->get($user->filesystem);
        $location->edit($id, $request->get('data'));

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = auth()->user();

        $location = $this->locations->get($user->filesystem);
        $location->delete($id);

        return response()->json([
            'success' => true
        ]);
    }
}
