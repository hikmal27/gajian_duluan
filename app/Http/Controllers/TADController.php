<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TADController extends Controller
{
    public function index()
    {
        $id_emp = Session::get('emp_id');

        $emp_gaji = DB::connection('mysql_local')->table('emp_gaji')->where('id_emp', $id_emp)->first();
        $gaji = $emp_gaji->gaji;

        return view('TAD.inputpengajuan', ['gaji' => $gaji, 'id_emp' => $id_emp]);
    }

    public function inputpengajuan(Request $request)
    {
        $tanggal = date('y-m-d');
        $nominal = $request->nominal;
        $id_emp  = $request->id_emp;

        $data_user = DB::table('users')->where('emp_id', $id_emp)->first();

        $db_server = DB::connection('mysql_core');
        $db_core = $db_server->table('emp')->where('id', $id_emp)->first();
        $nama = $db_core->name;
        $id = $db_core->id;

        $db_gd = DB::connection('mysql_local');
        // $categories = $db_ext->table('categories')->get();
        $db_gd->table('tbl_pinjam')->insert([
            'id_emp'         => $id,
            'tanggal_pinjam' => $tanggal,
            'end_date'       => $tanggal,
            'nominal_pinjam' => $nominal,
            'nama'           => $nama,
            'network'        => 'jakarta 1',
            'status'         => '0'
        ]);
        // dd($id);
        return redirect('/tad/inputpengajuan');
    }

    public function history() 
    {
        $id_emp = Session::get('emp_id');

        $data_history = DB::connection('mysql_local')->table('tbl_pinjam')->where('ID_EMP', $id_emp)->get();
        return view('TAD.history', ['data_history' => $data_history]);
    }
}
