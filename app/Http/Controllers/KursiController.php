<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KursiController extends Controller
{
    public function index()
    {
        $kursi = DB::table("kursi")->paginate(10);
        return view('pr-pertemuan-14/kursi', ['kursi' => $kursi]);
    }

    public function redirect_add()
    {
        return view('pr-pertemuan-14/add_kursi');
    }

    public function add(Request $request)
    {
        DB::table('kursi')->insert([
            'merkkursi' => $request->merk_kursi,
            'hargakursi' => $request->harga,
            'tersedia' => $request->status,
            'berat' => $request->berat
        ]);

        return redirect('pr-pertemuan-14/kursi');
    }

    public function edit($id)
    {
        $kursi = DB::table('kursi')
            ->where('ID', $id)
            ->get();

        return view('pr-pertemuan-14/edit_kursi', ['kursi' => $kursi]);
    }

    public function update(Request $request)
    {
        DB::table('kursi')->where('ID', $request->ID)->update([
            'merkkursi' => $request->merk_kursi,
            'hargakursi' => $request->harga,
            'tersedia' => $request->status,
            'berat' => $request->berat,
        ]);
        return redirect('pr-pertemuan-14/kursi');
    }

    public function delete($id){
        DB::table('kursi')->where('ID', $id)->delete();
        return redirect('pr-pertemuan-14/kursi');
    }

    public function search(Request $request){
        $search = $request->search;

        $kursi = DB::table('kursi')
        ->where('merkkursi', 'like', '%'.$search.'%')
        ->paginate();

        return view('pr-pertemuan-14/kursi', ['kursi' => $kursi]);
    }

    // analytics function
    public function getAnalytics()
    {
        $total_kursi = DB::table('kursi')->count();

        $total_assets = DB::table('kursi')
            ->select(DB::raw('SUM(hargakursi) as total_harga'))
            ->first();

        $weight_average = DB::table('kursi')
            ->select(DB::raw('AVG(berat) as avg_berat'))
            ->first();

        $availability = DB::table('kursi')
            ->select(DB::raw('SUM(CASE WHEN tersedia = 1 THEN 1 ELSE 0 END) / COUNT(*) * 100 as availability_percentage'))
            ->first();

        return response()->json([
            'total_kursi' => $total_kursi,
            'total_assets' => $total_assets->total_harga,
            'weight_average' => round($weight_average->avg_berat, 2),
            'availability_percentage' => round($availability->availability_percentage, 0)
        ]);
    }

}
