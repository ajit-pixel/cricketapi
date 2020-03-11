<?php

namespace App\Http\Controllers\Cricket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Match_Calender_Model;

class Match_Calender extends Controller
{
    public function get_calender()
    {
        return Match_Calender_Model::get_calender_details();
    }
}
