<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.team.index_team',[
            "page" => "Team",
            "team" => Team::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.team.create_team',[
            "page" => "Team"
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
            "name" => "required",
            "photo" => "required|image|file",
            "position" => "min:0",
            "sosial_media1" => "min:0",
            "sosial_media2" => "min:0",
            "sosial_media3" => "min:0",
        ]);
        $validated['photo'] = $request->file('photo')->store('photo_team', ['disk' => 'public']);
        Team::create($validated);
        // Alert::success('Success', 'Successfully add new data');
        return redirect('/admin/team');
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
    public function edit(Team $team)
    {
        return view('dashboard.team.edit_team',[
            "page" => "Team",
            "team" => $team,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Team $team)
    {
        $validated = $request->validate([
            "name" => "required",
            "photo" => "image|file",
            "position" => "min:0",
        ]);
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($team->photo);
            $validated['photo'] = $request->file('photo')->store('photo_team', ['disk' => 'public']);
        }
        Team::where('id', $team->id)->update($validated);
        // Alert::success('Success', 'Successfully edit data');
        return redirect('/admin/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homeImg = Team::find($id);
        Storage::disk('public')->delete($homeImg->photo);
        Team::destroy($homeImg->id);
        return redirect()->back();
    }
}
