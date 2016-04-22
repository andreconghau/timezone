<?php

namespace Laraveldaily\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{
    public function index($timezone)
    {
        $current_time = $timezone;
        return view('timezones::time', compact('current_time'));
    }

}