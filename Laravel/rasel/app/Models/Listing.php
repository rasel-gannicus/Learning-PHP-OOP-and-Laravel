<?php
namespace App\Models; 

class Listing{
    public static function all(){
        return [
            [
                'id' => 1 ,
                'title' => 'Listing number 1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti iusto, laboriosam repellat corporis voluptas odio saepe ad eligendi autem voluptatem. Ab magni veniam nam rem?'
                ],
                [
                'id' => 2 ,
                'title' => 'Listing number 2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti iusto, laboriosam repellat corporis voluptas odio saepe ad eligendi autem voluptatem. Ab magni veniam nam rem?'
                ],
                [
                'id' => 3 ,
                'title' => 'Listing number 1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti iusto, laboriosam repellat corporis voluptas odio saepe ad eligendi autem voluptatem. Ab magni veniam nam rem?'
                ]
                ];
    }

    public static function find($id){
        $listings = self::all(); 

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing ;
            }
        }
    }
}
?>