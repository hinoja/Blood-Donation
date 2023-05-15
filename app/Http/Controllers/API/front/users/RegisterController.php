<?php

namespace App\Http\Controllers\API\front\users;

use Nnjeim\World\World;
use Illuminate\Http\Request;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    dd("test");
        // dd('test');
        // $action=DB::table('countries');
        // $action =  World::countries([
        //     'fields' => 'states,cities',
        //     'filters' => [
        //         'iso2' => 'FR',
        //     ]
        // ]);

        // if ($action->success) {

        //     $countries = $action;
        // }
        // dd($action);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
