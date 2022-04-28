<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customers extends Model
{
	protected $table='customers';
    use HasFactory;

    public function address(){
		return $this->hasMany(Address::class);
	}

	public function getAll($filters = [],$name = null){
		$customer = DB::table($this->table);
		
		if (!empty($filters)){			
			$customer = $customer->where($filters);			
		}
		
		if (!empty($name)){			
			$customer = $customer->where('name','LIKE','%'.$name.'%')
			->orWhere('surname','LIKE','%'.$name.'%');
		}

		$customer = $customer->get();
		return $customer;
	}

	public function getCus($id){
		$cus = DB::table($this->table)
			->where('id','=',$id)
			->get();
		return $cus;
	}

	public function getAdr($id){
		$detail = DB::table('addresses')
			->where('customer_id','=',$id)
			->orderBy('created_at','desc')
			->get();
		//dd($detail);
		return $detail;
	}

}
