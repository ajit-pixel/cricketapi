<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerStatastic_Model extends Model
{
    public static function get_stat()
    {
        $url="https://cricapi.com/api/playerStats?apikey=ZxZ96UodrPOVYwPDVKnP4KLgzMs2&pid=35320";

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $output=curl_exec($ch);
        $data=json_decode($output,true);
        curl_close($ch);
        print_r($data);

        foreach($data['data'] as $stat)
        {
            $stat=new PlayerStatastic_Model([

            ]);
        }
    }
}
