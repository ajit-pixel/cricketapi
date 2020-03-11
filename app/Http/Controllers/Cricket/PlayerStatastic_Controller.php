<?php

namespace App\Http\Controllers\Cricket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PlayerStatastic_Model;

class PlayerStatastic_Controller extends Controller
{
    public function get_playerstat()
    {
        return PlayerStatastic_Model::get_stat();
    }
}
