<?php

namespace App\Http\Controllers\Cricket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OldMatches_Model;

class OldMatches_Controller extends Controller
{
    public function get_oldmatch_details(){
        return OldMatches_Model::get_oldmatches();
    }
   

}
