<?php

namespace App\Http\Controllers;

use App\Loan;
use App\Contact;
use App\Country;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index(){
        return view('front.home.index', [
            'pageTitle' => "Home",
        ]);
    }

    public function contact(){
        return view('front.contact.index', [
            'pageTitle' => "Contact",
        ]);
    }

    public function sendMessage(Request $request)
    {
        $contact = new Contact();
        $contact->fname = $request->get('fname');
        $contact->lname = $request->get('lname');
        $contact->email = $request->get('email');
        $contact->subject = $request->get('subject');
        $contact->message = $request->get('message');
        $contact->save();

        Flashy::success('Your message has been sent succesfully!', 'http://your-awesome-link.com');
        return view('front.contact.index', [
            'pageTitle' => "Contact",
        ]);
    }

    public function loan(){
        $country = Country::select('name')->get();
        return view('front.loan.index', [
            'pageTitle' => "Loan",
        ], compact('country'));
    }

    public function sendLoan(Request $request)
    {
        $country = Country::select('name')->get();
        $loan = new Loan();
        $loan->amount = $request->get('amount');
        $loan->duration = $request->get('duration');
        $loan->reason = $request->get('reason');

        $loan->fname = $request->get('fname');
        $loan->lname = $request->get('lname');
        $loan->email = $request->get('email');
        $loan->profession = $request->get('profession');
        $loan->phone = $request->get('phone');
        $loan->dob = $request->get('dob');
        $loan->address = $request->get('address');
        $loan->postal = $request->get('postal');
        $loan->city = $request->get('city');
        $loan->country = $request->get('country');

        $loan->save();
        Flashy::success('Your application form has been submited. We will get back to you very soon', 'http://your-awesome-link.com');
        return view('front.loan.index', [
            'pageTitle' => "Loan",
        ], compact('country'));
    }

    public function news(){
        return view('front.news.index', [
            'pageTitle' => "News",
        ]);
    }

    public function about(){
        return view('front.about.index', [
            'pageTitle' => "About",
        ]);
    }

    public function condition(){
        return view('front.admin.index', [
            'pageTitle' => "Conditions",
        ]);
    }
}
