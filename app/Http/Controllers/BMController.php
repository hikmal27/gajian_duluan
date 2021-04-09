<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BMController extends Controller
{
    public function listpengajuan()
    {
        $id = Session::get('emp_id');
        $data_pinjam = DB::connection('mysql_local')->table('tbl_pinjam')->where('status', '0')->get();

        return view('BM.listpengajuan', ['data_pinjam' => $data_pinjam]);
    }

    public function setuju($id)
    {
        date_default_timezone_set("Asia/Bangkok");
        $datetime = date("y-m-d h:i:s");

        DB::connection('mysql_local')->table('tbl_pinjam')->where('ID', $id)->update([
            'STATUS' => '1',
            'TANGGAL_ACC_BM' => $datetime
        ]);

        return redirect('/bm/listpengajuan');
    }

    public function tidaksetuju($id)
    {
        date_default_timezone_set("Asia/Bangkok");
        $datetime = date("y-m-d h:i:s");

        DB::connection('mysql_local')->table('tbl_pinjam')->where('ID', $id)->update([
            'STATUS' => '9',
            'TANGGAL_ACC_BM' => $datetime
        ]);

        return redirect('/bm/listpengajuan');
    }

    public function history()
    {
        $id_emp = Session('emp_id');
        $datauser = DB::connection('mysql_local')->table('tbl_pinjam')->where('ID_EMP', $id_emp)->get();

        return view('BM.history', ['datauser' => $datauser]);
    }
}
