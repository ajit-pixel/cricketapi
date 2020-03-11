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

        
            $ch=curl_init();
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            $output=curl_exec($ch);
            $data=json_decode($output,true);
            
            curl_close($ch);
       
            
            foreach($data['matches'] as $match)
            {
                $matches=new Cricket_Model([
                    'unique_id' =>$match['unique_id'],
                    'date'=>$match['date'],
                    'dateTimeGMT'=>$match['dateTimeGMT'],
                    'team-1'=>$match['team-1'],
                    'team-2'=>$match['team-2'],
                    'squad'=>$match['squad'],
                    'toss_winner_team'=>optional($match)['toss_winner_team'],
                    'matchStarted'=>$match['matchStarted'],
                    'type'=>$match['type'],
            ]);
             $matches->save();
            
            }
    
    }
}
