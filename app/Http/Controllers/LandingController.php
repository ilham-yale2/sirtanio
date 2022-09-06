<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.home.index',[
            "page" => "Home",
            "home" => Landing::first(),
            "slider" => Slider::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $rules = [
            "farmer" => "min:0",
            "land" => "min:0",
            "title" => "min:0",
            "link" => "min:0",
            "sub_title" => "min:0",
            "deskripsi" => "min:0",
            "benefit_title" => "min:0",
            "about_title" => "min:0",
            "product_title" => "min:0",
            "oppor_title" => "min:0",
            "contact_title" => "min:0",
            "article_title" => "min:0",
            "about_color" => "min:0",
            "product_color" => "min:0",
            "oppor_color" => "min:0",
            "contact_color" => "min:0",
            "article_color" => "min:0",
        ];
        $validated = $request->validate($rules);
        // dd($validated);
        if ($request->hasFile('popup_img')) {
            Storage::disk('public')->delete(Slider::find($id)->popup_img);
            $validated['popup_img'] = $request->file('popup_img')->store('home-img', ['disk' => 'public']);
        }
        Landing::where('id', Landing::find($id)->id)->update($validated);
        // Alert::success('Success', 'Data Updated Successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function slider()
    {
        return view('dashboard.home.create',[
            "page" => "Home",
        ]);
    }

    public function slider_store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required",
            "sub_title" => "required",
            "bg_img" => "file|image|required"
        ]);
        $validated['bg_img'] = $request->file('bg_img')->store('home-img', ['disk' => 'public']);
        Slider::create($validated);
        // Alert::success('Success', 'Successfully add new data');
        return redirect('/admin/home');
    }
    public function slider_edit($id)
    {
        return view('dashboard.home.edit',[
            'page' => "Home",
            'slider' => Slider::find($id),
        ]);
    }

    public function slider_update(Request $request,$id)
    {
        $validated = $request->validate([
            "title" => "required",
            "sub_title" => "required",
            "bg_img" => "file|image"
        ]);
        if ($request->hasFile('bg_img')) {
            Storage::disk('public')->delete(Slider::find($id)->bg_img);
            $validated['bg_img'] = $request->file('bg_img')->store('home-img', ['disk' => 'public']);
        }
        Slider::where('id', Slider::find($id)->id)->update($validated);
        // Alert::success('Success', 'Successfully edit data');
        return redirect('/admin/home');
    }

    public function slider_delete($id)
    {
        $slider = Slider::find($id);
        Storage::disk('public')->delete($slider->bg_img);
        slider::destroy($slider->id);
        return redirect()->back();
    }

}
