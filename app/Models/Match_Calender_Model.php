<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match_Calender_Model extends Model
{

    protected $table = "calender_migration";
   

    protected $fillable = [
        'unique_id',
        'name',
        'date',
        
        
    ];
    public static function get_calender_details()
    {
        $url="https://cricapi.com/api/matchCalendar?apikey=ZxZ96UodrPOVYwPDVKnP4KLgzMs2";

        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $output=curl_exec($ch);
        $data=json_decode($output,true);
        curl_close($ch);

        $object = new Match_Calender_Model();

    /*    echo $object->creditsLeft = $data['creditsLeft'];
        echo $object->source = $data['provider']['source'];
        echo $object->url = $data['provider']['url'];
        echo $object->pubDate = $data['provider']['pubDate'];
        echo $object->ttl = $data['ttl'];
        echo $object->v = $data['v'];
        echo $object->cache = $data['cache'];
        //echo $object->unique_id = $data['data'][0];
*/
     
        foreach($data['data'] as $calender )
        {
            $calender = new Match_Calender_Model([
                'unique_id' =>$calender['unique_id'],
                'name' =>$calender['name'],
                'date' =>$calender['date'],
               
            ]);

            $calender->save();
        }

    }
}
