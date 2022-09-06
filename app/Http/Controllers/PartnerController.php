<?php

namespace App\Http\Controllers;

use App\Models\partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.about.index_partner', [
            "page" => "Partner",
            "partner" => Partner::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.about.create_partner', [
            "page" => "Partner"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "image" => "required|file"
        ]);
        $image['image'] = $request->file('image')->store('partner_image', ['disk' => 'public']);
        $image['index'] = Partner::all()->count() + 1 ;
        Partner::create($image);
        return redirect()->route('partner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, partner $partner)
    {
        foreach ($request->id as $index => $id) {
            Partner::find($id)->update(['index' => $index + 1]);
        }

        return response()->json('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(partner $partner)
    {
        Storage::disk('public')->delete($partner->image);
        Partner::destroy($partner->id);
        $notdel = Partner::orderBy('index', 'desc')->get();
        if ($notdel != null) {
            foreach ($notdel as $key => $value) {
                Partner::find($value->id)->update(['index' => $key + 1]);
            }
        }
        return redirect()->back();
    }

    public function position(Request $request)
    {
        foreach ($request->id as $index => $id) {
            Partner::find($id)->update(['index' => $index + 1]);
        }

        return response()->json('success');

    }
}
