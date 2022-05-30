<?php

namespace App\Models;

class Listing{

    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Sed sit amet fermentum ex. Aliquam erat volutpat. Etiam eros nisi, accumsan et dignissim a, ullamcorper in est. Etiam hendrerit laoreet lacus, eget malesuada arcu lacinia ut. Pellentesque ac elit tristique, posuere urna euismod, posuere ligula. Donec ex nibh, ultrices non felis sed, commodo ornare justo. Ut commodo pharetra neque, ac commodo massa vehicula non. Mauris a elementum nulla, a maximus neque. Quisque fermentum nibh dictum, cursus arcu quis, volutpat justo. Morbi rhoncus vestibulum orci Derp.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Pellentesque commodo nisi quis risus rhoncus, et faucibus nisl hendrerit. Integer pretium sapien sed felis ullamcorper posuere a ut urna. Ut aliquet ac leo congue convallis. Praesent vitae malesuada justo, ut accumsan nisl. Praesent finibus facilisis mi ut porttitor. Nam malesuada eleifend libero, ac luctus nibh volutpat eu. Nunc id varius nulla. Aliquam ut commodo magna. Maecenas sodales libero at quam pellentesque bibendum. Nullam ut ante tempor, egestas eros et, feugiat diam.'
            ]
        ];
    }

    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }

}