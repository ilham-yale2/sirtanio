<?php

namespace App\Http\Controllers;

use App\Models\Reseller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page'] = 'Reseller';
        $data['resellers'] = Reseller::all();
        return view('dashboard.reseller.index', $data);
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
     * @param  \App\Models\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function show(Reseller $reseller)
    {
        $data['page'] = 'Reseller';
        $data['reseller'] = $reseller;
        return view('dashboard.reseller.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function edit(Reseller $reseller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reseller $reseller)
    {
        DB::beginTransaction();
        try {
           
            if($reseller->phone_number == $request->phone_number){
                $phone_rule = '';
            }else{
                $phone_rule = 'unique:resellers,phone_number|';
            }
            $validated_input = $this->validate($request, [
                'full_name' => 'required',
                'phone_number' => 'required|min:11|'.$phone_rule.'numeric',
                'shipping_address' => 'required'
            ]);
            $reseller->update($validated_input);
            DB::commit();
            $message = [
                'status' => 'success',
                'text' => 'success to update reseller',
            ];
        } catch (\Throwable $th) {
            throw $th;
            $message = [
                'status' => 'danger',
                'text' => 'failed to update reseller',

            ];
        }
        return redirect()->route('reseller.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reseller $reseller)
    {
        try {
            $reseller->delete();
            $message = [
                'status' => 'success',
                'text' => 'success to delete reseller',
            ];
        } catch (\Throwable $th) {
            $message = [
                'status' => 'danger',
                'text' => 'failed to delete reseller',
            ];
        }
        return redirect()->route('reseller.index')->with('message', $message);
    }
}
