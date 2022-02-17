<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static function getAllProduct()
    {
        return [
            0=>[
                'id'=>'1',
                'name'=>'t-shirt',
                'price'=> '1250',
                'description'=>'lorem1dskfja',
                'image' => asset('/img/p1.jpg'),

            ],
            1=>[
                'id'=>'2',
                'name'=>'Tangail Shari',
                'price' =>'13400',
                'description'=>'shari is ready to use',
                'image'=>asset('/img/p4.jpg'),
            ],
            2=>[
                'id'=>'3',
                'name'=>'Fashionable Watch',
                'price' =>'3000',
                'description'=>'Watch is ready to use',
                'image'=>asset('/img/xxx.jpg'),
            ],
        ];
    }
}
