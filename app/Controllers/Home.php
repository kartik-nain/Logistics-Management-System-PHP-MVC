<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view("Home/index"); 
        // return view("WebsiteHomePage/index");
        //return view("Warehouse/warehouseView");
    }

}