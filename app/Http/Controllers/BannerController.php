<?php

namespace App\Http\Controllers;

use App\Http\Requests\bannerRequest;
use App\Models\Banner;
use App\Models\Category;


class BannerController extends Controller
{
    
    public function index()
    {
        return Banner::all();
    }

  
    public function store(bannerRequest $request)
    {
        $banner = Banner::create($request->validated());
        return $banner->fresh();
    }


    public function show(Banner $banner)
    {
        return $banner;
    }

    


    public function update(bannerRequest $request, Banner $banner)
    {
        $banner->fill($request->validated())->save();
        return $banner->fresh();
    }

    
    public function destroy(Banner $banner)
    {
        return $banner->delete();
    }

    

}
