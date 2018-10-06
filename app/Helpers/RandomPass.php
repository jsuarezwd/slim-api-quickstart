<?php

namespace App\Helpers;

class RandomPass
{
    
    public static function get(){
       $letter = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','W','X','Y','Z'];
        $number = [0,1,2,3,4,5,6,7,8,9];
        $randomPass = $letter[rand(0,24)].$number[rand(0,9)].$letter[rand(0,24)].$letter[rand(0,24)].$number[rand(0,9)].$letter[rand(0,24)].$number[rand(0,9)].$number[rand(0,9)].$letter[rand(0,24)];
        return $randomPass;
    }
    
}