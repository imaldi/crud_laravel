@extends('adminlte.master')
@section('content')
    <div class="card">
        {{-- {{ dd('edit view') }} --}}
        <form action="{{ url('/pertanyaan/'.$id) }}" method="POST">

            {{ method_field('put')}}
            @csrf
            <input hidden name="id" value="{{ $id }}">
            <label class="form-control">Judul</label>
            <input type="text" name="judul" value="{{ $pertanyaan->judul }}"><br>

            <label class="form-control">Isi</label>
            <input type="text" name="isi" value="{{ $pertanyaan->isi}}"><br>

            <input hidden type="text" name="tanggal_dibuat" value="{{ $pertanyaan->tanggal_dibuat }}"><br>
            
            <input hidden type="text" name="tanggal_diperbarui" value="{{ \Carbon\Carbon::now() }}"><br>

            <button class="btn btn-warning">Update Pertanyaan</button>
        </form>
    </div>
@endsection