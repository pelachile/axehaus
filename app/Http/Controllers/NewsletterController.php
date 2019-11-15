<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

class NewsletterController extends Controller
{
    public function signup(Request $request)
    {
       if ( ! Newsletter::isSubscribed( $request->email ) ) {
           Newsletter::subscribe($request->email, ['FNAME'=> $request->fname, 'LNAME'=> $request->lname]);
           return redirect('/')->with('success', 'Thanks for requesting our info');
       }

       return redirect('/')->with('failure', 'You are already subscribed');
    }

}
