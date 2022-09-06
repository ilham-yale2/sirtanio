<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use App\Models\Opreason;
use Illuminate\Http\Request;

class OpreasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.opreason.index_opreason',[
            "page" => "Opportunity Reason",
            "op" => Opreason::all(),
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
        return view('dashboard.opreason.create_opreason',[
            "page" => "Opportunity Reason"
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
            "reason" => "required",
        ]);
        Opreason::create($validated);
        // Alert::success('Success', 'Successfully add new data');
        return redirect('/admin/opportunity_reason');
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
        return view('dashboard.opreason.edit_opreason',[
            "page" => "Opportunity Reason",
            "opreason" => Opreason::find($id),
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
            'reason' => 'required',
        ]);
        Opreason::where('id', Opreason::find($id)->id)->update($validated);
        // Alert::success('Success', 'Successfully edit data');
        return redirect('/admin/opportunity_reason');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homeImg = Opreason::find($id);
        Opreason::destroy($homeImg->id);
        return redirect()->back();
    }

}
