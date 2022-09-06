<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['participants'] = Participant::all();
        $data['page'] = 'Participant';

        return view('dashboard.participant.index', $data);
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
        // return $request->all();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(Participant $participant)
    {
        $data['participant'] = $participant;
        $data['page'] = 'Participant';
        return view('dashboard.participant.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participant)
    {
        DB::beginTransaction();
        try {
           
            if($participant->phone_number == $request->phone_number){
                $phone_rule = '';
            }else{
                $phone_rule = 'unique:participant,phone_number|';
            }
            $validated_input = $this->validate($request, [
                'full_name' => 'required',
                'age'=> 'required|numeric',
                'profession' => 'required',
                'reason' => 'required',
                'instagram' => 'required',
                'phone_number' => 'required|min:11|'.$phone_rule.'numeric',
                'shipping_address' => 'required'
            ]);
            $participant->update($validated_input);
            DB::commit();
            $message = [
                'status' => 'success',
                'text' => 'success to update participant',
            ];
        } catch (\Throwable $th) {
            throw $th;
            $message = [
                'status' => 'danger',
                'text' => 'failed to update participant',

            ];
        }
        return redirect()->route('participant.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
        try {
            $participant->delete();
            $message = [
                'status' => 'success',
                'text' => 'success to delete participant',
            ];
        } catch (\Throwable $th) {
            $message = [
                'status' => 'danger',
                'text' => 'failed to delete participant',
            ];
        }
        return redirect()->route('participant.index')->with('message', $message);
    }
}
