<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMealRequestRequest;
use App\Http\Requests\UpdateMealRequestRequest;
use App\Models\MealRequest;
use Illuminate\Support\Facades\Validator;

class MealRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMealRequestRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'price' => 'required',
            'location' => 'required',
            'number' => 'required',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'error validating the items'
            ]);
        }

        $order = new MealRequest();
        $order->title = $request->get('title');
        $order->price = $request->get('price');
        $order->location = $request->get('location');
        $order->number = $request->get('number');
        $order->phone = auth()->user()->phone;
        $order->user  = auth()->user()->name;
        $order->save();
        return response()->json($order);
    }
    /**
     * Display the specified resource.
     */
    public function show(MealRequest $mealRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MealRequest $mealRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMealRequestRequest $request, MealRequest $mealRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MealRequest $mealRequest)
    {
        //
    }
}
