<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Landing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.benefit.index_benefit',[
            "page" => "Benefit",
            "benefit" => Benefit::all(),
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
        return view('dashboard.benefit.create_benefit',[
            "page" => "Benefit",
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
            "icon" => "required",
            "description" => "required",
        ]);
        // $validated['icon'] = $request->file('icon')->store('icon', ['disk' => 'public']);
        Benefit::create($validated);
        // Alert::success('Success', 'Successfully add new data');
        return redirect('/admin/benefit');
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
    public function edit(Benefit $benefit)
    {
        return view('dashboard.benefit.edit_benefit',[
            "page" => "Benefit",
            "benefit" => $benefit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Benefit $benefit)
    {
        $validated = $request->validate([
            'icon' => 'required',
            "description" => "required",
        ]);
        // if ($request->hasFile('icon')) {
        //     Storage::disk('public')->delete($benefit->icon);
        //     $validated['icon'] = $request->file('icon')->store('icon', ['disk' => 'public']);
        // }
        Benefit::where('id', $benefit->id)->update($validated);
        // Alert::success('Success', 'Successfully edit data');
        return redirect('/admin/benefit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homeImg = Benefit::find($id);
        // Storage::disk('public')->delete($homeImg->icon);
        Benefit::destroy($homeImg->id);
        return redirect()->back();
    }
}
