<?php

namespace Inbec\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inbec\Entities\Banners\Banner;
use Inbec\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Inbec\Http\Requests\Admin\StoreBannerRequest;
use Inbec\Http\Requests\Admin\UpdateBannerRequest;

class BannersController extends Controller
{
    public function index()
    {

        $banners = Banner::orderBy('sort_order')->paginate(10);

        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(StoreBannerRequest $request, Banner $banner)
    {

        $banner->fill($request->all());
        $banner->addImage($request->file('image'));
        $banner->save();

        cache()->flush();

        $message = $banner->isActive() ? 'O banner foi criado e já está ativo no site.' : 'O banner foi criado, porém não está ativo no site.' ;
        flash()->success('Sucesso!', $message);

        return redirect()->route('banners.index');
    }

}
