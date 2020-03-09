<?php

namespace App\Http\Controllers\Cricket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Score_Model;

class Score_Controller extends Controller
{
    public function get_score()
    {
        return Score_Model::get_score_details();
    }
}
