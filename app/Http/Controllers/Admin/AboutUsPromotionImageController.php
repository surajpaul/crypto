<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AboutUsPromotionImage;

class AboutUsPromotionImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutUsPromotionImage = AboutUsPromotionImage::all();
        return view('admin.aboutUsPromotionImage.index', compact('aboutUsPromotionImage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutUsPromotionImage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'=> 'required',
            'url'=> 'nullable'
        ]);

        $image_name = $request->image;
        $image = $request->file('image');
        if($image != ''){
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/aboutUs'), $image_name);
        }

        $aboutUsPromotionImage = new AboutUsPromotionImage();
        $aboutUsPromotionImage->image = $image_name;
        $aboutUsPromotionImage->url = $request->get('url');
        $aboutUsPromotionImage->save();
        return redirect('/admin/aboutUsPromotionImage')->with('success', 'Library image has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutUsPromotionImage = AboutUsPromotionImage::findOrFail($id);
        return view('admin.aboutUsPromotionImage.edit', compact('aboutUsPromotionImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != ''){
            $request->validate([
                'image'=> 'required',
                'url'=> 'nullable'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/aboutUs'), $image_name);
        }

        $form_data = array(
            'image' => $image_name,
            'url' => $request->get('url')
        );

        AboutUsPromotionImage::whereId($id)->update($form_data);
        return redirect('/admin/aboutUsPromotionImage')->with('success', 'Library Image has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutUsPromotionImage = AboutUsPromotionImage::findOrFail($id);
        $aboutUsPromotionImage->delete();
        return redirect('/admin/aboutUsPromotionImage')->with('success', 'Library Image has been deleted successfully.');
    }
}
