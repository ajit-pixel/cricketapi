<?php

namespace App\Http\Controllers\Cricket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cricket_Model;

class Cricket_Controller extends Controller
{
    public function get_api_data()
    {
        return Cricket_Model::get_api_data_model();
        }
}
