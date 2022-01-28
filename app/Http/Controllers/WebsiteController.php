<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function practiceAreas(){
        return view('Website.practiceArea');
    }
    //Conveyancing Page
    public function conveyancing(){
        return view('Website.conveyancingPage');
    }
    //Corporate-commercial law Page
    public function commerciallaw(){
        return view('Website.commerciallawPage');
    }
    //Dispute Resolution Page
    public function disputeressolution(){
        return view('Website.disputeressolutionPage');
    }
     //Family Law and Estate Planning Page
     public function familylaw(){
        return view('Website.familylawPage');
    }
      //Our Team Page
      public function team(){
        return view('Website.teamPage');
    }
     //Updates and Media Page
     public function media(){
        return view('Website.mediaPage');
    }
     //Contact us Page
     public function contacts(){
        return view('Website.contactsPage');
    }


}
