@extends('Admin\dashboardAdmin')

@section('layout')
        <h1>Review Surat</h1>
        <div class="flex-row-reverse">
            <a class="btn btn-primary" href="/Sekretaris/Home">Back</a>
            <div class="col-sm-8">
                <a class="btn btn-primary" href="/Sekretaris/Home">Back</a>
            </div>
        </div>

@endsection

@section('isi')
@if($item['jenis'] == 'Individu')
<div class="container">
<div class="border-bottom">
<div class="row">
    <div class="col-md-10">
          <h4>Universitas Kristen Duta Wacana<h4>
          <h4>FAKULTAS TEKNOLOGI INFORMASI</h4>
          <ul>
              <li>PROGRAM STUDI INFORMATIKA</li>
              <li>PROGRAM STUDI SISTEM INFORMASI</li>
          </ul>
        </div>
</div>
    <div class="row" align="center">
        <h3><em><u>Surat Undangan</u></em></h3>
        <h4>No. : 0{{ $item['id'] }}/D.{{ date('m') }}/FTI/2021 </h4><!--System-->
    </div><br><br>
    <div class="col-sm">
    <h4>Dengan ini Saya, yang bertanda tangan dibawah ini, mengundang anda pada acara :</h4>
    <div class="col-sm">
    <ul>
      <li>
        <h4> Nama Acara  : {{ event }}</h4><!--Nik-->
      </li>
      Yang akan dilaksanakan pada :
      <li>
        <h4> Tanggal Pelaksanaan : {{ $awal }}  - {{ $selesai}} </h4><!--Nama-->
      </li>
      <li>
        <h4> Ruangan : {{$ruangan}} </h4><!--Nama-->
      </li>
    </ul>
    </div>
    <div class="col-sm">
    <h4>Dimohon saudara yang mendapat undangan ini untuk memberikan </h4>
        <!--Tema Kegiatan,Penyelenggara Kegiatan, Tempat Kegiatan, Hari, Tanggal Pelaksanaan Kegiatan-->
    <br>
    <h4>Demikian surat tugas ini dibuat untuk dapat dipergunakan sebagaimana perlunya.
        Kepada penerima tugas setelah menyelesaikan tugas dimohon menyampaikan laporan kepada pemberi tugas.</h4>
    <br>
    </div>
    <div align="right">
            <br><br><br><br><br>
            <h4>Yogyakarta, {{ date('d F Y') }}<h4>
            <h4>_________,</h4><br><br><br><br>
            <h4><b><u>_________________________</u></b></h4>
            <h4>____________________</h4>
    </div>
  </div>
</div>
</div>
