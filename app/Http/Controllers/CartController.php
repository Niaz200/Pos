<?php

namespace App\Http\Controllers;





use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data=array();
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['qty']=$request->qty;
        $data['price']=$request->price;
        $data['weight']=$request->weight;



        $add = Cart::add($data);
            if ($add ){
                $notification=array(
                    'messege'=>'Product Added',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);

            }else{
                $notification=array(
                    'messege'=> 'error',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
            }


    }


    public function CartUpdate(Request $request,$rowId)
    {

        $qty=$request->qty;
        $update=Cart::update($rowId,$qty);;

        if ($update ){
            $notification=array(
                'messege'=>'Update Successfully',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);

        }else{
            $notification=array(
                'messege'=> 'error',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }


    public function CartRemove($rowId)
    {



        $rem=Cart::remove($rowId);


        if ($rem){
            $notification=array(
                'messege'=>'Remove Successfully',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);

        }else{
            $notification=array(
                'messege'=> 'error',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }

    }

    public function CreateInvoice(Request $request)
    {

        $request->validate([
            'cus_id' => 'required',
            ],
            [
                'cus_id.required' => 'Select A Customer First!',
        ]);

        $cus_id=$request->cus_id;
        $customer=DB::table('customers')->where('id',$cus_id)->first();
        $contents=Cart::content();
        return view('invoice', compact('customer','contents'));
    }


    public function FinalInvoice(Request $request)
    {
        $request->validate([
            'payment_status' => 'required',
        ],
            [
                'payment_status.required' => 'Select Your Payment First!',
            ]);


        $data=array();
        $data['customer_id']=$request->customer_id;
        $data['order_date']=$request->order_date;
        $data['order_status']=$request->order_status;
        $data['total_products']=$request->total_products;
        $data['sub_total']=$request->sub_total;
        $data['vat']=$request->vat;
        $data['total']=$request->total;
        $data['payment_status']=$request->payment_status;
        $data['pay']=$request->pay;
        $data['due']=$request->due;

       $order_id=DB::table('orders')->insertGetId($data);
       $contents=Cart::content();

       $odata=array();
       foreach ($contents as $content)
       {
           $odata['order_id']=$order_id;
           $odata['product_id']=$content->id;
           $odata['quantity']=$content->qty;
           $odata['unitcost']=$content->price;
           $odata['total']=$content->total;

           $insert=DB::table('orderdetails')->insert($odata);

       }

        if ($insert){
            $notification=array(
                'messege'=>'Successfully Invoice Created | Please delever the products and accept status',
                'alert-type'=>'success'
            );

            Cart::destroy();
            return Redirect()->route('home')->with($notification);

        }else{
            $notification=array(
                'messege'=> 'error exception',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }

    }


}
