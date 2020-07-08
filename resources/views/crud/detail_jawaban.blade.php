@extends('adminlte.master')
@section('content')
    <div>
        {{-- {{dd($jawabans, $pertanyaan)}} --}}
        <h1> Pertanyaan </h1> <br>
        <p> judul : {{$pertanyaan->judul}}</p> <br>
        <p> isi : {{$pertanyaan->isi}}</p> <br>

        <h2> Jawaban/s </h2>
        @foreach ($jawabans as $jawaban)
            <p>{{$jawaban->isi}}, {{$jawaban->tanggal_dibuat}}, {{ $jawaban->tanggal_diperbarui}}</p>
        @endforeach
    </div>
    @endsection