<?php

namespace App\Http\Controllers;

use App\Models\Linkman;
use App\Http\Requests\linkmanRequest;

class LinkmanController extends Controller
{
    
    public function index()
    {
        return Linkman::all();
    }

    public function store(linkmanRequest $request)
    {
        $linkman = Linkman::create($request->validated());
        return $linkman->fresh();
    }

    public function show(Linkman $linkman)
    {
        return $linkman;
    }

    
    public function update(linkmanRequest $request, Linkman $linkman)
    {
        $linkman->fill($request->validated())->save();
        return $linkman->fresh();
    }


    public function destroy(Linkman $linkman)
    {
        return $linkman->delete();
    }
}
