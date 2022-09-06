<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Landing;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return view('dashboard.about.index_about', [
            "page" => "About",
            "about" => About::first(),
            "home" => Landing::all()->first(),
        ]);
    }

    public function update(About $about, Request $request) {
        $about_text = $request->about_text;
        $value_text = $request->value_text;
        $vision_text = $request->vision_text;
        $certificate_text = $request->certificate_text;

        $request['about_text'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['about_text'])));
        $request['value_text'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['value_text'])));
        $request['vision_text'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['vision_text'])));
        $request['certificate_text'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['certificate_text'])));

        $validated = $request->validate([
            "about_title" => "required",
            "about_text" => "required",
            "value_title" => "required",
            "value_text" => "required",
            "vision_title" => "required",
            "vision_text" => "required",
            "certificate_title" => "required",
            "certificate_text" => "required",
        ]);

        $validated['about_text'] = $about_text;
        $validated['value_text'] = $value_text;
        $validated['vision_text'] = $vision_text;
        $validated['certificate_text'] = $certificate_text;

        if ($request->hasFile('certificate_img')) {
            $validated['certificate_img'] = $request->file('certificate_img')->store('certificate_img', ['disk' => 'public']);
        }

        About::find($about->id)->update($validated);

        return redirect()->back();

    }
}
