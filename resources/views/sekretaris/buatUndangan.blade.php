@extends('sekretaris\dashboard')

@section('layout')
    <h1>Undangan</h1>
    <div class="flex-row-reverse">
        <a class="btn btn-primary" href="/sekretaris/Home">Back</a>
    </div>
@endsection

@section('isi')
    <form action="/sekretaris/Home/BuatUndangan/Undangan" method="post">
        @csrf
        <div class="control-group input-group mb-3">
                <input type="text" class="form-control" id="user_id" name="user_id" required value="{{ auth()->user()->user_id }}">
                <input type="text" class="form-control" id="name" name="name" required value="{{ auth()->user()->name }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Kegiatan</label>
            <input type="date" class="form-control" id="waktu" name="waktu" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Waktu Awal</label>
            <input type="time" class="form-control" id="awal" name="awal" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">waktu Selesai</label>
            <input type="time" class="form-control" id="selesai" name="selesai" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Event</label>
            <input type="text" class="form-control" id="event" name="event" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Penerima Undangan</label>
            <input type="address" class="form-control" id="penerima" name="penerima" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ruangan</label>
            <input type="text" class="form-control" id="ruangan" name="ruangan" required>
        </div>
        <input type="hidden" id="status" name="status" required value="Sedang Diproses">
        <input type="hidden" id="jenis" name="jenis" required value="Kegiatan">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
