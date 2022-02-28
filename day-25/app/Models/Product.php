<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $image;
    private static $directory;
    private static $product;
    private static $imageName;
    private static $imageURL;

    public static function getImageurl($request)
    {
        self::$image         =$request->file('image');
        self::$imageName    =self::$image->getClientOriginalName();

        self::$directory     ='product-image/';

        self::$image->move(self::$directory, self::$imageName);

        return self::$directory.self::$imageName;
    }
    public static function newProduct($request)
    {
        self::$product              = new Product();

    }
    public static function updateProduct( $request,$id)
    {
        self::$product =Product::find($id);
        if($request->file('image'))
        {
            if (file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageURL = self::getImageurl($request);
        }
        else
        {
         self::$imageURL= self::$product->image;
        }
        self::saveBasicInfo(self::$product,$request , self::$imageURL);
        Product::updateProduct($request);

    }
    private static function saveBasicInfo($product, $request, $imageURL)
    {
        $product->name        =$request->name;
        $product->category    =$request->category;
        $product->brand       =$request->brand;
        $product->price       =$request->price;
        $product->description =$request->description;
        $product->image       = $imageURL;
        $product->save();
    }
}
