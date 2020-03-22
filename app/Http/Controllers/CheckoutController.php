<?php

namespace App\Http\Controllers;

use App\Customer;
use App\OrderDetails;
use App\Shipping;
use App\Order;
use App\Payment;
use Mail;
use Session;
use Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){
        return view('front-end.checkout.checkout-content');
    }

    public function checkoutRegister(Request $request){
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email_address = $request->email_address;
        $customer->phone_no = $request->phone_no;
        $customer->password = bcrypt($request->password);
        $customer->address = $request->address;
        $customer->save();

        Session::put('customerId',$customer->id);
        Session::put('customerName',$customer->first_name.' '.$customer->last_name);

        $data = $customer->toArray();
        Mail::send('front-end.mails.welcome-mail',$data,function ($message) use ($data){
            $message->to($data['email_address']);
            $message->subject('Welcome to Eiser Shop');
        });

        return redirect('/shipping');
    }

    public function checkoutLogin(Request $request){
        $customer = Customer::where('email_address',$request->email_address)->first();

        if(password_verify($request->password, $customer->password)){
            Session::put('customerId',$customer->id);
            Session::put('customerName',$customer->first_name.' '.$customer->last_name);

            return redirect('/shipping');
        } else {
            return back()->with('message','Invalid Email or password!');
        }
    }

    public function checkoutLogout(Request $request){
        Session::forget('customerId');
        Session::forget('customerName');

        return redirect('/checkout');
    }

    public function shippingForm(){
        $customerId = Customer::find(Session::get('customerId'));
        return view('front-end.checkout.shipping',['customerId' => $customerId]);
    }

    public function checkoutShipping(Request $request){
        $shipping = new Shipping();
        $shipping->full_name = $request->full_name;
        $shipping->email_address = $request->email_address;
        $shipping->phone_no = $request->phone_no;
        $shipping->address = $request->address;
        $shipping->save();

        Session::put('shippingId',$shipping->id);
        //return 'success';
        return redirect('/checkout/payment');
    }

    public function paymentForm(){
        return view('front-end.checkout.payment');

        //return Cart::subtotal();
    }

    public function confirmOrder(Request $request){
        $paymentType = $request->payment_info;
        if($paymentType == 'cash'){
            $order = new Order();
            $order->customer_id = Session::get('customerId');
            $order->shipping_id = Session::get('shippingId');
            $order->order_total = Cart::subtotal();
            $order->save();

            $payment = new Payment();
            $payment->order_id = $order->id;
            $payment->payment_info = $paymentType;
            $payment->save();

            $cartProducts = Cart::content();
            foreach($cartProducts as $cartProduct){
                $orderDetails = new OrderDetails();
                $orderDetails->order_id = $order->id;
                $orderDetails->product_id = $cartProduct->id;
                $orderDetails->product_name = $cartProduct->name;
                $orderDetails->product_price = $cartProduct->price;
                $orderDetails->product_quantity = $cartProduct->qty;
                $orderDetails->save();
            }
            Cart::destroy();

            return redirect('/order/success');
        }
        if($paymentType == 'stripe'){
            $order = new Order();
            $order->customer_id = Session::get('customerId');
            $order->shipping_id = Session::get('shippingId');
            $order->order_total = Cart::subtotal();
            $order->save();

            $payment = new Payment();
            $payment->order_id = $order->id;
            $payment->payment_info = $paymentType;
            $payment->save();

            $cartProducts = Cart::content();
            foreach($cartProducts as $cartProduct){
                $orderDetails = new OrderDetails();
                $orderDetails->order_id = $order->id;
                $orderDetails->product_id = $cartProduct->id;
                $orderDetails->product_name = $cartProduct->name;
                $orderDetails->product_price = $cartProduct->price;
                $orderDetails->product_quantity = $cartProduct->qty;
                $orderDetails->save();
            }
            Cart::destroy();

            return redirect('stripe');
        }
    }

    public function successOrder(){
        return view('front-end.checkout.success-order');
    }
}
