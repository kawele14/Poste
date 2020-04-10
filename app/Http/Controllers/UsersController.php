<?php

namespace App\Http\Controllers;

use App\Loan;
use App\User;
use App\Contact;
use App\Country;
use App\BankInfo;
use App\PersonalInfo;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
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

    public function storePersonalInfo(Request $request){
        $personalInfo = new PersonalInfo();
        $personalInfo->fname = $request->get('fname');
        $personalInfo->mname = $request->get('mname');
        $personalInfo->email = $request->get('email');
        $personalInfo->profession = $request->get('profession');
        $personalInfo->phone = $request->get('phone');
        $personalInfo->dob = $request->get('dob');
        $personalInfo->address = $request->get('address');
        $personalInfo->postal = $request->get('postal');
        $personalInfo->city = $request->get('city');
        $personalInfo->country = $request->get('country');
        $personalInfo->save();
        //Flashy::success('Your personal info has been submited.', 'http://your-awesome-link.com');
        return view('front.users.index', [
            'pageTitle' => "Contact",
        ]);
    }


    public function storeBankInfo(Request $request){
        $bankInfo = new BankInfo();
        //$users = new User();
        $bankInfo->name = $request->get('bname');
        $bankInfo->address = $request->get('address');
        $bankInfo->iban = $request->get('iban');
        $bankInfo->bic = $request->get('bic');
        $bankInfo->rib = $request->get('rib');
        //$bankInfo->personal_id = $users->email;
        $bankInfo->save();
        //Flashy::success('Your personal info has been submited.', 'http://your-awesome-link.com');
        return view('front.users.index', [
            'pageTitle' => "Contact",
        ]);
    }



}