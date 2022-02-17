<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $products;
    private $data=[
        0=>['name'=>'hasib',
            'city'=>'Dhaka',
            'mobile'=>'123455',
            ],
        1=>['name'=>'miraj',
            'city'=>'lalbag',
            'mobile'=>'234625',
        ],
        2=>['name'=>'rana',
            'city'=>'mirpur',
            'mobile'=>'212412'
        ]
    ];



    public function index()
    {
        return view('test');
    }

    public function bitm()
    {
        $this->city='Dhaka';
        $this->mobile='01234596023';
        return view('demo', [
            'a'=>$this->city,
            'b'=>$this->mobile,
            'fahim'=> $this->data
        ]);
    }

    public function about()
    {
        $this->products=Product::getAllProduct();
        return view('about',['products'=>$this->products]);
    }

    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {
        $this->products=Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if ($item['id']==$id)
            {
                return view('detail',['data'=>$item]);
            }
        }


    }
}
