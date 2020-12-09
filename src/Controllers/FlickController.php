<?php

namespace Mariojgt\Flick\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlickController extends Controller
{
    public function index()
    {
        return view('flick::content.index');
    }
}
