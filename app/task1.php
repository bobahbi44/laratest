<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task1 extends Model
{
    protected $table = 'task1';


    public function getValidPhone() {
        $valid_phone = [];
        foreach (self::where([])->get() as $phone) {
            $number = str_replace(['(', ')', '-' , '-', ' ', '+'], '', $phone->Phone);

            if (preg_match('!([1-9]\d{1,14})!si', $number, $match)) {

                 $phone->E164 = '+' . $match[1];
            }
            $valid_phone[] = $phone;
        }
        return $valid_phone;
    }
}
