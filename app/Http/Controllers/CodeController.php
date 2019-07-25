<?php


namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Session;
use Auth;
use App\TestModel;

class CodeController extends Controller
{
    public function verify_reg(request $request){



        $result = $this->validate($request,[
           'name' => 'required',
            'email' => 'required|unique:regs,email|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password'

        ],
        $customMessages = [
            'name.required' => 'Name field is required',
            'email.required' => 'We need your email field',
            'password.required'  => 'We need your Password field',
            'confirm_password'  => 'Password should match with the previous one',
         ]);



         if(!$result){
            // print_r($result);
            // print_r($request->all());
            // die();

            $request['password'] = Hash::make($request['password']);
             $verify = new TestModel();

             $verify1 = $verify->checkReg($request);

             return redirect()->route('login');
         }

    }

    public function verify_lgin(Request $request){

        $customMessages = [
            'email.required' => 'We need your email field',
            'password.required'  => 'We need your Password field',
        ]; //Cusstom messages

        $result = $this->validate($request,[

            'email' => 'required|email',
            'password' => 'required',

        ],$customMessages); //validating

        if(!$result){
            $verify = new TestModel();
            $check= $verify->checkLgin($request->all());
        }

        if(count($check)){
            $check=$check[0];
            $password=$request['password'];

            $val = Hash::check($password, $check["password"]);
            if($val == ""){
                $val=0;
            }

                if($val == 1)
                {
                    $request->session()->put('email',$request['email']);

                    $test = new TestModel;
                    $id = $test->getId($request['email']);

                    $request->session()->put('id',$id);

                    // print_r($request->session()->get('id'));
                    // die();

                    $email=$request->session()->get('email');

                    $data = array(
                        'email'=> $email,
                        );

                return redirect()->route('dashboard')->with($data);
                 }
                 else {
                    //  die("Inside no val");
                return redirect()->route('login');
                 }
        }
        else {
            // die("Inside else val");
             return redirect()->route('login');
        }
    }

    public function check_login(Request $request){

        // print_r($request->session()->get('id'));
        // die();

        // return view('login');

        if ($request->session()->get('id'))
        {
            return redirect()->route('dashboard');
        } else {
            return view('login');
        }
    }

    public function verify_pronew(){
        return redirect()->route('product');
    }

    public function dashboard(Request $request){

            // print_r($request->session()->get('id'));
            // die();

            if($request->session()->get('id'))
            {

            }

            else{
                return redirect()->route('login');
            }

            $email = $request->session()->get('email');
                // print_r($email);
                // die();

                $data = array(
                    'email' => $email,
                );

                return view('dashboard')->with($data);
    }

    public function verify_pro(Request $request){

        $id = $request->session()->get('id');

        // print_r($id);
        // die();

        $verify = new TestModel();
        $verify->addProduct($request,$id);
        return redirect()->route('productTable');
    }

    public function logout(request $request){
        $request->session()->flush();
        return redirect('/');
    }

}
?>