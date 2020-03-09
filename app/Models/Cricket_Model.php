<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Cricket_Model extends Model
{
    protected $table = "matches";
   

    protected $fillable = [
        'unique_id',
        'date',
        'dateTimeGMT',
        'team-1',
        'team-2',        
        'squad',
        'toss_winner_team',
        'matchStarted',
        'type',
        
    ];
    public static function get_api_data_model(){
        $url="https://cricapi.com/api/matches?apikey=ZxZ96UodrPOVYwPDVKnP4KLgzMs2";

        $data=Cache::get($url);

        if($data == NULL)
        {
            $ch=curl_init();
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            $output=curl_exec($ch);
            $data=json_decode($output);
            $expireat=now()->addHour(24);
            Cache::put($url,$data,$expireat);
            curl_close($ch);
        }
        if($data!= null){
        foreach($data->matches as $match)
        {
            $matches=new Cricket_Model([
                'unique_id' =>optional($match)->unique_id,
                'date'=>optional($match)->date,
                'dateTimeGMT'=>optional($match)->dateTimeGMT,
                'team-1'=>optional($match)->team-1,
                'team-2'=>optional($match)->team-2,
                'squad'=>optional($match)->squad,
                'toss_winner_team'=>optional($match)->toss_winner_team,
                'matchStarted'=>optional($match)->matchStarted,
                'type'=>optional($match)->matchStartypeted,
            ]);
             $matches->save();
        }
    }
    }
}
