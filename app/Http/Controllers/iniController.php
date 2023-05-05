<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class iniController extends Controller
{
    public function anjay(){
        $Hobby = [
            ['Hobby name' => 'Gundam Building', 'Hobby Detail' => 'Gundam is one of my childhood dreams, i onced dreamed to be a Gundams Pilot','image' => 'Gundam.jpeg'],
            ['Hobby name' => 'Pussy Hunting', 'Hobby Detail' => 'I love cat, i always spent time to pet a cat even tho im on dire situation','image' => 'Pussy.jpeg'],
            ['Hobby name' => 'Fishing', 'Hobby Detail' => 'Eventhough majority of people called fishing as "hobi bapack-bapack", i still love fishing','image' => 'mancing.png']
        ];
        return view('welcome', compact('Hobby'));
    }

    public function deskrip($nama){
        $Hobby = [
            ['Hobby name' => 'Gundam Building', 'Hobby Detail' => 'Gundam is one of my childhood dreams, i onced dreamed to be a Gundams Pilot','image' => 'Gundam.jpeg'],
            ['Hobby name' => 'Pussy Hunting', 'Hobby Detail' => 'I love cat, i always spent time to pet a cat even tho im on dire situation','image' => 'Pussy.jpeg'],
            ['Hobby name' => 'Fishing', 'Hobby Detail' => 'Eventhough majority of people called fishing as "hobi bapack-bapack", i still love fishing','image' => 'mancing.png']
        ];
        $hob = [];
        foreach($Hobby as $hobk){
            if($hobk['Hobby name'] == $nama){
                $hob = $hobk;
            }
        }
        return view('detailnya',compact('hob'));
    }
}
