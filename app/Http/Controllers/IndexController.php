<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legislacao;
use App\Models\Publicacao;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicacoes = Publicacao::query()
            ->where("ativo","=",1)
            //->whereDate("created_at","<",Carbon::now())
            ->orderBy("created_at","desc")
            ->paginate();

        //return view("index", compact('publicacoes'));

        $legislacoes = Legislacao::query()
            ->where("ativo","=",1)
            //->whereDate("created_at","<",Carbon::now())
            ->orderBy("created_at","desc")
            ->paginate();

        return view("index", compact('publicacoes','legislacoes'));
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
