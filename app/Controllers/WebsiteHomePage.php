<?php

namespace App\Controllers;

class WebsiteHomePage extends BaseController {
    
    public function index()
    {
        return view("WebsiteHomePage/index");
    }

    
}