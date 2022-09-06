<?php

namespace App\Http\Controllers;

use App\Models\Landing;

use App\Models\Opimage;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Storage;

class OpimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.opimage.index_opimage',[
            "page" => "Opportunity Image",
            "op" => Opimage::all(),
            "home" => Landing::all()->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.opimage.create_opimage',[
            "page" => "Opportunity Image",
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
        $validated = $request->validate([
            "photo" => "required|image|file",
        ]);
        $validated['photo'] = $request->file('photo')->store('photo-oppor', ['disk' => 'public']);
        Opimage::create($validated);
        // Alert::success('Success', 'Successfully add new data');
        return redirect('/admin/opportunity_image');
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
        return view('dashboard.opimage.edit_opimage',[
            "page" => "Opportunity Image",
            "opimage" => Opimage::find($id),
        ]);
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
        $validated = $request->validate([
            'photo' => 'image|file',
        ]);
        $hapus = Opimage::find($id);
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($hapus->photo);
            $validated['photo'] = $request->file('photo')->store('photo-oppor', ['disk' => 'public']);
        }
        Opimage::where('id', Opimage::find($id)->id)->update($validated);
        // Alert::success('Success', 'Successfully edit data');
        return redirect('/admin/opportunity_image');
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


    public function imgdel($id)
    {
        $image = Opimage::find($id);
        Storage::disk('public')->delete($image->photo);
        Opimage::where('id', Opimage::find($id)->id)->update(['photo' => null]);
        return redirect()->back();
    }
}
