<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeskStoreRequest;
use App\Http\Resources\DeskResource;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Desk;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DeskResource::collection(Desk::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DeskStoreRequest $request)
    {
        $createdDesk = Desk::create($request->validate());

        return new DeskResource($createdDesk);
    }

    /**
     * Display the specified resource.
     */
    public function show(Desk $desk)
    {
        return new DeskResource($desk);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DeskStoreRequest $request, Desk $desk)
    {
        $desk->update($request->validated());

        return new DeskResource($desk);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Desk $desk)
    {
        $desk->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
