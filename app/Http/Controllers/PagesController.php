<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex(){
        return view('pages.welcome');
    }

    public function getAbout(){
        $first = 'Faizal';
        $middle = 'Fahmi';
        $last = 'Aziz';

        $fullname = $first ." ". $middle . " " . $last;
        $email = 'faizaziz24@gmail.com';

        #$data = [];
        #data[fullname] = $fullname;
        #data[email] = $email;

        return view('pages.about')->with("fullname", $fullname)->with("email", $email);        
        #return view('pages.about')->withFullname($fullname)->withEmail($email);

    }

    public function getContact(){
        return view('pages.contact');
    }
}