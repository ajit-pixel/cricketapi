<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OldMatches_Model extends Model
{
    protected $table="oldmatch";
    protected $fillable=[
        'unique_id',
        'description',
        'title',

    ];

    public static function get_oldmatches()
    {
        $url="https://cricapi.com/api/cricket?apikey=ZxZ96UodrPOVYwPDVKnP4KLgzMs2";       

        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $output=curl_exec($ch);
        $data=json_decode($output,true);
        curl_close($ch);

        print_r($data);

        foreach($data['data'] as $oldmatches)
        {
            $oldmatch=new OldMatches_Model([
                'unique_id'=>$oldmatches['unique_id'],
                'description'=>$oldmatches['description'],
                'title'=>$oldmatches['title'],

            ]);
            $oldmatch->save();
        }


    }
}
