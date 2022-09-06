<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.general',[
            "page" => "General",
            "general" => General::first(),
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
    public function update(Request $request, General $general)
    {
        $rules = [
            "logo_navbar" => "image|file",
            "logo_footer" => "image|file",
            "logo_seo" => "image|file",
            "name" => "required",
            "nav_contact_1" => "required",
            "nav_contact_2" => "required",
            "description" => "required",
            "facebook" => "required",
            "instagram" => "required",
            "whatsapp" => "required",
            "tokopedia" => "required",
            "shopee" => "required",
        ];

        $validated = $request->validate($rules);
        if ($request->hasFile('logo_navbar')) {
            Storage::delete($general->logo_navbar);
            $validated['logo_navbar'] = $request->file('logo_navbar')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        if ($request->hasFile('logo_footer')) {
            Storage::delete($general->logo_footer);
            $validated['logo_footer'] = $request->file('logo_footer')->store('general-images',[
                'disk' => 'public'
            ]);
        }
        if ($request->hasFile('logo_seo')) {
            Storage::delete($general->logo_seo);
            $validated['logo_seo'] = $request->file('logo_seo')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        General::where('id', $general->id)->update($validated);

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
}
