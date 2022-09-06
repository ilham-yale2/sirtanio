<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\About;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Benefit;
use App\Models\Contact;
use App\Models\General;
use App\Models\Journey;
use App\Models\Landing;
use App\Models\Opimage;
use App\Models\Product;
use App\Models\Partner;
use App\Models\Category;
use App\Models\Opreason;
use App\Models\Participant;
use App\Models\Promotion;
use App\Models\Reseller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    function __construct()
    {
        $this->general = General::all()->first();
        $this->home = Landing::all()->first();
    }

    function landing()
    {
        return view('layout.landing',[
            "page" => "Sirtanio Organik Indonesia",
            "general" => $this->general,
            "benefit" => Benefit::all(),
            "home" => Landing::all()->first(),
            "slider" => Slider::all(),
            "product" => Product::inRandomOrder()->limit(3)->get(),
        ]);
    }

    function contact()
    {
        return view('frontend.contact',[
            "page" => "Contact",
            "general" => $this->general,
            "contact" => Contact::all()->first(),
            "home" => $this->home,
        ]);
    }

    function article()
    {
        return view('frontend.article',[
            "page" => "Article",
            "general" => $this->general,
            "articles" => Article::all(),
            "home" => $this->home,
        ]);
    }

    function article_category($name)
    {
        return view('frontend.article',[
            "page" => "Article Category",
            "general" => $this->general,
            "articles" => Article::where('category_id', Category::where('name', $name)->get()->first()->id)->get(),
            "home" => $this->home,
        ]);
    }

    function article_detail(Article $article)
    {
        return view('frontend.article-detail',[
            "page" => "Article Detail",
            "general" => $this->general,
            "article" => $article,
            "categories" => Category::all(),
            "home" => $this->home,
        ]);
    }

    function about()
    {
        return view('frontend.about',[
            "page" => "About us",
            "team" => Team::all(),
            "about" => About::first(),
            "partner" => Partner::orderBy('index', 'ASC')->get(),
            "journey" => Journey::all(),
            "general" => $this->general,
            "home" => $this->home,
        ]);
    }

    function products()
    {
        return view('frontend.products',[
            "page" => "Products",
            "general" => $this->general,
            "product" => Product::all(),
            "home" => $this->home,
        ]);
    }

    function opportunity()
    {
        return view('frontend.opportunity',[
            "page" => "Opportunity",
            "general" => $this->general,
            "img1" => Opimage::where('index','1')->first(),
            "img2" => Opimage::where('index','2')->first(),
            "img3" => Opimage::where('index','3')->first(),
            "img4" => Opimage::where('index','4')->first(),
            "img5" => Opimage::where('index','5')->first(),
            "img6" => Opimage::where('index','6')->first(),
            "img7" => Opimage::where('index','7')->first(),
            "reason" => Opreason::all(),
            "total" => Opreason::count(),
            "home" => $this->home,
        ]);
    }

    function promotion(){
        $data['sliders'] = Promotion::where('type', 'slider')->get();
        $data['video'] = Promotion::where('type', 'video')->first();
        $data['general'] = $this->general;
        return view('frontend.modal_redirect', $data);
    }

    function saveParticipant(Request $request){
    
        DB::beginTransaction();
        try {
            $this->validate($request, [
                'full_name' => 'required',
                'age' => 'required',
                'profession' => 'required',
                'phone_number' => 'required|unique:participants|numeric|min:11',
                'shipping_address' => 'required',
                'reason' => 'required',
            ]);
            Participant::create($request->all());
            DB::commit();
            $message = [
                'status' => 'success',
                'text' => 'success sumbit form',
            ];
        } catch (\Throwable $th) {
            $message = [
                'status' => 'success',
                'text' => 'success sumbit form',
            ];
            DB::rollBack();
        }
        return redirect()->route('user.promotion')->with('message', $message);
    }

    function submitReseller(Request $request){
        DB::beginTransaction();
        try {
            $this->validate($request, [
                'reseller_name' => 'required',
                'phone_reseller' => 'required|min:11|unique:resellers,phone_number|numeric',
                'reseller_address' => 'required'
            ]);
           
            $reseller = new Reseller();
            $reseller->full_name = $request->reseller_name;
            $reseller->phone_number = $request->phone_reseller;
            $reseller->shipping_address = $request->reseller_address;
            $reseller->save();
            DB::commit();
        $message = [
                'status' => 'success',
                'text' => 'success to register reseller',
            ];
        } catch (\Throwable $th) {
            throw $th;
            $message = [
                'status' => 'danger',
                'text' => 'failed to register reseller',
                'err' => $th

            ];
        }
        return redirect()->route('user.promotion')->with('reseller', $message);
    }


}
