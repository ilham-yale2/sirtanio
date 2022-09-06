<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page'] = 'Promotion';
        $data['sliders'] = Promotion::where('type', 'slider')->get();
        $data['video'] = Promotion::where('type', 'video')->first();
        return view('dashboard.promotion.index', $data);
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
        try {
            if($request->file('image')){
                $validated = $request->validate([
                    "image" => "file|image|required"
                ]);
                $validated['image'] = $request->file('image')->store('promotion-slider', ['disk' => 'public']);
                $promotion = new Promotion();
                $promotion->source = $validated['image'];
                $promotion->type = 'slider';
                $promotion->save();
                $message = [
                    'status' => 'success',
                    'text' => 'success to add slider',
                ];
            }

            
        } catch (\Throwable $th) {
            return $th;
            $message = [
                'status' => 'danger',
                'text' => 'failed to add slider',
            ];
        }
        return redirect()->route('promotion.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'link' => 'required'
        ]);
        try {
            $promo = Promotion::where('type', 'video')->first();
            if($promo){
                $promotion = $promo;
            }else{
                $promotion = new Promotion();
            }
            $promotion->type = 'video';
            $promotion->source = $request->link;
            $promotion->save();
            $message = [
                'status' => 'success',
                'text' => 'success to update video link',
            ];
        } catch (\Throwable $th) {
            $message = [
                'status' => 'danger',
                'text' => 'failed to update video link',
            ];
        }

        return redirect()->route('promotion.index')->with(['message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $promotion = Promotion::find($id);
            Storage::disk('public')->delete($promotion->source);
            $promotion->delete();
            $message = [
                'status' => 'success',
                'text' => 'success to delete slider',
            ];
        } catch (\Throwable $th) {
            $message = [
                'status' => 'danger',
                'text' => 'failed to delete slider',
            ];
        }
        return redirect()->route('promotion.index')->with(['message' => $message]);

    }
}
