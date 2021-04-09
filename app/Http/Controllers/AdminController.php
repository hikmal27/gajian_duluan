<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function listpengajuan()
    {
        $id = Session::get('emp_id');
        $data_pinjam = DB::connection('mysql_local')->table('tbl_pinjam')->get();

        return view('ADMIN.listpengajuan', ['data_pinjam' => $data_pinjam]);
    }

    public function setuju($id)
    {
        date_default_timezone_set("Asia/Bangkok");
        $datetime = date("y-m-d h:i:s");

        DB::connection('mysql_local')->table('tbl_pinjam')->where('ID', $id)->update([
            'STATUS' => '5',
            'TANGGAL_ACC_ADMIN' => $datetime
        ]);
        return redirect('/admin/listpengajuan');
    }

    public function tidaksetuju($id)
    {
        date_default_timezone_set("Asia/Bangkok");
        $datetime = date("y-m-d h:i:s");

        DB::connection('mysql_local')->table('tbl_pinjam')->where('ID', $id)->update([
            'STATUS' => '10',
            'TANGGAL_ACC_ADMIN' => $datetime
        ]);
        return redirect('/admin/listpengajuan');
    }

    public function inputmaster()
    {
        $data = DB::connection('mysql_core')->table('emp')->limit(300)->get();

        return view('ADMIN.inputmaster', ['data' => $data]);
    }

    public function status(Request $request)
    {
        $id = $request->nama;
        $status = $request->input_master;

        DB::connection('mysql_local')->table('tbl_maps')->insert([
            'ID_EMP' => $id,
            'STATUS' => $status,
            'KETERANGAN' => '0'
        ]);

        return redirect('/admin/inputmaster');
    }

    public function disetujui()
    {
        $id = Session::get('emp_id');
        $data_disetujui = DB::connection('mysql_local')->table('tbl_pinjam')->where('STATUS', '5')->get();
        return view('ADMIN.disetujui', ['data_disetujui' => $data_disetujui]);
    }

    public function cair($id)
    {
        date_default_timezone_set("Asia/Bangkok");
        $datetime = date("y-m-d h:i:s");

        DB::connection('mysql_local')->table('tbl_pinjam')->where('ID', $id)->update([
            'STATUS' => '6',
            'TANGGAL_ACC_ADMIN' => $datetime
        ]);

        return redirect('/admin/disetujuiadmin'); 
    }
}
