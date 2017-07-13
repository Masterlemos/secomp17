<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App;
use URL;

class LocalController extends Controller
{
    public function setLocal($id) {
        Session::put('locale', $id);
        App::setLocale($id);
        return redirect(URL::previous());
    }
}
