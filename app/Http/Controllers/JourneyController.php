<?php

namespace App\Http\Controllers;

use App\Models\Journey;
use Illuminate\Http\Request;

class JourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.journey.index_journey', [
            "page" => "Journey",
            "journey" => Journey::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.journey.create_journey', [
            "page" => "Journey",
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
        $body = $request->body;

        $request['body'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['body'])));

        $validated = $request->validate([
            "year" => "required",
            "body" => "required"
        ]);

        $validated['body'] = $body;
        Journey::create($validated);
        return redirect()->route('journey.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function show(journey $journey)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function edit(journey $journey)
    {
        return view('dashboard.journey.edit_journey', [
            "page" => "Journey",
            "journey" => $journey
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, journey $journey)
    {
        $body = $request->body;

        $request['body'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['body'])));

        $validated = $request->validate([
            "year" => "required",
            "body" => "required"
        ]);

        $validated['body'] = $body;
        Journey::find($journey->id)->update($validated);
        return redirect()->route('journey.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function destroy(journey $journey)
    {
        Journey::destroy($journey->id);
        return redirect()->back();
    }
}
