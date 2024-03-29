<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
//        return Product::all();

        return Product::select('product_name', 'cat_id', 'sup_id', 'product_code', 'product_garage',
            'product_route', 'product_image', 'product_des', 'buy_date', 'expire_date', 'buying_price',
            'selling_price',)->get();
    }



}
