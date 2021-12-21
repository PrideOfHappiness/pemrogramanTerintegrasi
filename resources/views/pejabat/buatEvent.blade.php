@extends('sekretaris\dashboard')

@section('layout')
    <h1>Undangan</h1>
    <div class="flex-row-reverse">
        <a class="btn btn-primary" href="/Mahasiswa/Home/BuatSurat">Back</a>
    </div>
@endsection

@section('isi')
    <form action="/sekretaris/Home/BuatUndangan/Undangan" method="post">
        @csrf
        <div class="control-group input-group mb-3">
                <input type="text" class="form-control" id="user_id" name="user_id" required value="{{ auth()->user()->nim }}">
                <input type="text" class="form-control" id="name" name="name" required value="{{ auth()->user()->name }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Event</label>
            <input type="text" class="form-control" id="event" name="event" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Pelaksanaan</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Waktu Selesai</label>
            <input type="time" class="form-control" id="awal" name="awal" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Waktu Selesai</label>
            <input type="time" class="form-control" id="selesai" name="selesai" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ruangan</label>
            <input type="ruangan" class="form-control" id="ruangan" name="alamatMitra" required>
        </div>
        <input type="hidden" id="status" name="status" required value="Sedang Diproses">
        <input type="hidden" id="jenis" name="jenis" required value="Kegiatan">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

