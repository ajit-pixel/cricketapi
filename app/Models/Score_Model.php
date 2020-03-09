<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score_Model extends Model
{
    public static function get_score_details()
    {
        $url="https://cricapi.com/api/cricketScore?apikey=ZxZ96UodrPOVYwPDVKnP4KLgzMs2&unique_id=1034809";

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $output=curl_exec($ch);
        $data=json_decode($output);
        curl_close($ch);


        foreach($data->cricketScore as $score)
        {
           
        }




    }
}
