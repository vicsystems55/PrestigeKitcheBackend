<?php

namespace App\Http\Controllers\API\V1;
use App\Http\Controllers\Controller;


use App\Models\MenuItem;
use App\Http\Requests\StoreMenuItemRequest;
use App\Http\Requests\UpdateMenuItemRequest;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMenuItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuItemRequest $request)
    {
        //

        $menuItem = MenuItem::create([
            'vendor_id' => $request->vendor_id,
            'name' => $request->name,
            'description' => $request->description,
            'base_price' => $request->base_price,
            'image_link' => $request->image_link,
        ]);


        return $menuItem;




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function show(MenuItem $menuItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenuItemRequest  $request
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuItemRequest $request, MenuItem $menuItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuItem $menuItem)
    {
        //
    }
}
