<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\Undangan;
use App\Models\User;
use Dompdf\Dompdf;


class UndanganController extends Controller{
    public function submit(Request $request){
        //$user_id = implode(",", $request->get('user_id'));
        //$name = implode(",", $request->get('name'));
        Undangan::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'event' => $request->event,
            'waktu' => $request->waktu,
            'awal' => $request->awal,
            'selesai' => $request->selesai,
            'ruangan' => $request->ruangan,
            'status' => $request->status,
            'penerima' => $request->penerima,
        ]);
        return redirect('/sekretaris/Home/ListUndangan');
    }

    public function showUndangan(){
        $undangan = Undangan::get();
        return view('sekretaris\listUndangan', compact('undangan'));
    }

    public function detail(){
        $data_user = User::where('user_id', $item->user_id)->get();
        $nim = explode(",", $item->user_id);
        $name = explode(",", $item->name);
        return view('TemplateSurat\detailTugas', compact('data_user', 'nim', 'name'));
    }


}
?>
