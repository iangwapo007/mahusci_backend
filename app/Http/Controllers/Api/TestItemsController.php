<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\TestItems;
use App\Http\Controllers\Controller;
use App\Http\Requests\TestItemsRequest;

class TestItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TestItems::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestItemsRequest $request)
    {
        $validated = $request->validated();

        $TestItem = TestItems::create($validated);

        return $TestItem;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return TestItems::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestItemsRequest $request, string $id)
    {
        $validated = $request->validated();

         $TestItem = TestItems::findOrFail($id);
                    
         $TestItem->update($validated); 

        return $TestItem;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $TestItem = TestItems::findOrFail($id);

        $TestItem->delete();

        return $TestItem;
    }
}
