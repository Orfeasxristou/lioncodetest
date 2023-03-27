<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Responses\HttpResponses;
use App\Http\Resources\getcompaniesResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class getCompanies extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       //return all data from companies table using resource and collection method
       return getcompaniesResource::collection(

        companies::all()

       );      

           
       

        
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
