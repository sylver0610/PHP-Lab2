<?php

namespace App\Http\Controllers;
use App\Models\Customers;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    private $customer;

    public function __construct()
    {
        $this->customer = new Customers();
    }

    public function showAll(Request $request){      
        $filters = [];
        $name=null;

        if (!empty($request->txtPhone)){
            $phone = $request->txtPhone;
            $filters[]=['customers.phone','=',$phone];
        }

        if (!empty($request->status)){
            $status = $request->status;
            $filters[]=['customers.block','=',$status];
        }

        if (!empty($request->txtEmail)){
            $email = $request->txtEmail;
            $filters[]=['customers.email','=',$email];
        }

        if (!empty($request->txtName)){
            $name = $request->txtName;           
        }        
                
        //dd($filters);

        $view = $this->customer->getAll($filters,$name);        
        return view('allCustomer',['view'=>$view]);
    }

    public function show($id){
        $cus = $this->customer->getCus($id);
        
        //dd($cus);
        $detail = $this->customer->getAdr($id);        
        return view('detailCustomer',compact('cus','detail'));
    }
    

    

}
