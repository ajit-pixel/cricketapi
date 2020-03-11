<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score_Model extends Model
{
    protected $table = "score";
   

    protected $fillable = [
        'matchStarted',
        'team-1',
        'team-2',        
        'v',
        'ttl',
        'provider',
        'creditsLeft',
        
    ];
    public static function get_score_details()
    {
        $url="https://cricapi.com/api/cricketScore?apikey=ZxZ96UodrPOVYwPDVKnP4KLgzMs2&unique_id=1034809";

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $output=curl_exec($ch);
        $data=json_decode($output,true);
        curl_close($ch);
        print_r($data);


        $object = new Score_Model();
        $object->matchstarted= $data['matchStarted'];
        $object->team1=$data['team-1'];
        $object->team2=$data['team-2'];
        $object->v=$data['v'];
        $object->ttl=$data['ttl'];
        $object->source=$data['provider']['source'];
        $object->url=$data['provider']['url'];
        $object->pubDate=$data['provider']['pubDate'];
        $object->creditsLeft=$data['creditsLeft'];
        
        $object->save();



    }
}
