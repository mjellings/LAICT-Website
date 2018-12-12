<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function general_support() {
        return view('pages.services.general');
    }

    public function server_support() {
        return view('pages.services.server');
    }

    public function remote_backup() {
        return view('pages.services.remote-backup');
    }

    public function web_development() {
        return view('pages.services.web-development');
    }

    public function connectivity() {
        return view('pages.services.connectivity');
    }

    public function our_promise() {
        return view('pages.our-promise');
    }

    public function contact_us() {
        return view('pages.contact-us');
    }

    public function support_info() {
        return view('pages.support-info');
    }

    public function terms_and_conditions() {
        return view('pages.terms-and-conditions');
    }

    public function privacy() {
        return view('pages.privacy');
    }
    
    public function phpinfo() {
        phpinfo();
    }
}
