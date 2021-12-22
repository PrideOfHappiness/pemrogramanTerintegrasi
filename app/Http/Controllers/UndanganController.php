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

class UndanganController extends Controller{
    public function submit(Request $request){
        //$user_id = implode(",", $request->get('user_id'));
        //$name = implode(",", $request->get('name'));
        Undangan::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'event' => $request->event,
            'waktu' => $request->eaktu,
            'awal' => $request->awal,
            'selesai' => $request->selesai,
            'ruangan' => $request->ruangan,
            'status' => $request->status,
            'penerima' => $request->penerima,
        ]);
        return redirect('/Mahasiswa/Home');
    }
}
?>
