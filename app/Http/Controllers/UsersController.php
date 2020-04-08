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

class UsersController extends Controller
{

    public function index(){
        return view('front.users.index', [
            'pageTitle' => "Home",
        ]);
    }

    public function addPersonal(){
        $country = Country::select('name')->get();
        return view('front.users.add_personal_info', [
            'pageTitle' => "Loan",
        ], compact('country'));
    }

    public function addAccount(){
        return view('front.users.add_account_info', [
            'pageTitle' => "Account Info",
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
        return view('front.users.index', [
            'pageTitle' => "Contact",
        ]);
    }

}