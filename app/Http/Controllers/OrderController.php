<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetails;
use PDF;
use Excel;
use App\Exports\UsersExport;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::with('customer','payment')->get();
        //return $orders;
        return view('admin.order.manage-order',['orders'=>$orders]);
    }

    public function viewDetails($id){
        $orderDetails = Order::with('customer','payment','shipping')->find($id);
        $productDetails = OrderDetails::where('order_id',$orderDetails->id)->get();
        //return $productDetails;
        return view('admin.order.view-order-details',[
            'orderDetails'=>$orderDetails,
            'productDetails' => $productDetails
        ]);
    }

    public function viewInvoice($id){
        $orderDetails = Order::with('customer','payment','shipping')->find($id);
        $productDetails = OrderDetails::where('order_id',$orderDetails->id)->get();
        return view('admin.order.view-order-invoice',[
            'orderDetails'=>$orderDetails,
            'productDetails' => $productDetails
        ]);
    }

    public function viewPDF($id){
        $orderDetails = Order::with('customer','payment','shipping')->find($id);
        $productDetails = OrderDetails::where('order_id',$orderDetails->id)->get();
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('admin.order.view-order-invoice',[
            'orderDetails'=>$orderDetails,
            'productDetails' => $productDetails
        ]);
        return $pdf->setPaper('A4', 'portrait')->stream('invoice.pdf');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
