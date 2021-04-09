<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->username;
        $pass     = $request->password;
        $pass_enc = Crypt::encryptString($pass);

        $datauser = DB::table('users')->where('username', $username)->first();
        // dd($datauser);

        $emp_id = $datauser->emp_id;
        Session::put('emp_id', $emp_id);

        $id_emp = Session::get('emp_id');
        $user_login = DB::connection('mysql_local')->table('tbl_maps')->where('ID_EMP', $id_emp)->first();
        $role = $user_login->STATUS;
        Session::put('STATUS', $role);

        if($datauser == NULL) {
            return redirect('/');
        } else {
            if ( $role == 1 ) {
                return redirect('/tad/inputpengajuan');
            } else if ( $role == 2 ) {
                return redirect('/bm/listpengajuan');
            } else if( $role == 3 ) {
                return redirect('/admin/listpengajuan');
            } else {
                return 'NO';
            }

        }
    }
}
