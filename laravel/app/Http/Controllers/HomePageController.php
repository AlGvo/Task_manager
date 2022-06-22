<?php

namespace App\Http\Controllers;

class HomePageController extends \Illuminate\Routing\Controller
{
    public function view() {
        return 'This is Home Page';
    }
}
