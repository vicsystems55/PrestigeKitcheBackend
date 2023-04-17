<?php

namespace App\Http\Controllers;

use App\Models\MenuItemVariant;
use App\Http\Requests\StoreMenuItemVariantRequest;
use App\Http\Requests\UpdateMenuItemVariantRequest;

class MenuItemVariantController extends Controller
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
     * @param  \App\Http\Requests\StoreMenuItemVariantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuItemVariantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuItemVariant  $menuItemVariant
     * @return \Illuminate\Http\Response
     */
    public function show(MenuItemVariant $menuItemVariant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenuItemVariantRequest  $request
     * @param  \App\Models\MenuItemVariant  $menuItemVariant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuItemVariantRequest $request, MenuItemVariant $menuItemVariant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuItemVariant  $menuItemVariant
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuItemVariant $menuItemVariant)
    {
        //
    }
}
