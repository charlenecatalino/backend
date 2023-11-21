<?php

namespace App\Http\Controllers\Api;


use App\Models\Prompt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PromptRequest;


class PromptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Prompt::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PromptRequest $request)
    {
         // Retrieve the validated input data...
         $validated = $request->validated();

         $prompt = Prompt::create($validated);
 
         return $prompt;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Prompt::findOrFail($id);
    }
    
    /**
     * Update the specified resource in storage
     */
    public function update(PromptRequest $request, string $id)
    {
        $validated = $request->validated();

        $prompt = Prompt::findOrFail($id);
                                
        $prompt->update($validated);
        
        return $prompt;
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $prompt = Prompt::findOrFail($id);

        $prompt->delete();

        return $prompt;
    }
    
}