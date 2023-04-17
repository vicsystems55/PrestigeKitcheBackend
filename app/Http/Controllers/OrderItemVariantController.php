<?php

namespace App\Http\Controllers;

use App\Models\OrderItemVariant;
use App\Http\Requests\StoreOrderItemVariantRequest;
use App\Http\Requests\UpdateOrderItemVariantRequest;

class OrderItemVariantController extends Controller
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
     * @param  \App\Http\Requests\StoreOrderItemVariantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderItemVariantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderItemVariant  $orderItemVariant
     * @return \Illuminate\Http\Response
     */
    public function show(OrderItemVariant $orderItemVariant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderItemVariantRequest  $request
     * @param  \App\Models\OrderItemVariant  $orderItemVariant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderItemVariantRequest $request, OrderItemVariant $orderItemVariant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderItemVariant  $orderItemVariant
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderItemVariant $orderItemVariant)
    {
        //
    }
}
