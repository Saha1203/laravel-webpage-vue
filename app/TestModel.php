<?php

namespace App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TestModel extends Model
{
    public function checkReg($request){

        // print_r($request->all());
        // die();
       
        // $check = DB::table('regs')->insertGetId(array('email' => $request['email'],'password' => $request['password']));
        DB::beginTransaction();
        try{
        $check = DB::table('regs')->insert(
            array('email' => $request['email'],
            'password' => $request['password'],
            'name' => $request['name'])
        );  
        }
        catch(ValidationException $e){
            DB::rollback();
            return redirect()->route('register'); 
        }

        DB::commit();
    }


    public function checkLgin($request){
      
        // print_r($request);
        // die();

        $check = DB::table('regs')->where('email', $request['email'])->get();

        $check = json_decode(json_encode($check), True); //converting object to array
        // print_r($check);
        // die();

        return $check;
    }

    //------------------------------------------------------------------------------------------------

    public function checkPro($request,$value){
            $check = DB::table('product')->insert(
            array(
            'admin_email' => $value,
            'product_category' => $request['product_category'],
            'product_name' => $request['product_name'],
            'product_stock' => $request['product_stock'],
            'product_price' => $request['product_price'],
            'product_file' => $request['product_file']
            )
            );
            // print_r($check);
        return $check;
    }

   }

?>