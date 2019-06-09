<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Concerns\FromCollection;

use App\Product;
use App\Category;
use DB;
use Excel;
use  stdClass;

class ExportExcelController extends Controller
{
    function index()
    {
     $customer_data = DB::table('products')->get();
     return view('reportes.export_excel')->with('customer_data', $customer_data);
    }

    function excel()
    {
     $customer_data = DB::table('products')->get()->toArray();
     $customer_array[] = array('name', 'phone', 'address', 'price', 'price_rest');
     foreach($customer_data as $customer)
     {
      $customer_array[] = array(
       'name'  => $customer->name,
       'phone'   => $customer->phone,
       'address'    => $customer->address,
       'price'    => $customer->price,
       'price_rest'    => $customer->price_rest,
      );
     }
     Excel::create('Customer Data', function($excel) use ($customer_array){
      $excel->setTitle('Customer Data');
      $excel->sheet('Customer Data', function($sheet) use ($customer_array){
       $sheet->fromArray($customer_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }
}
