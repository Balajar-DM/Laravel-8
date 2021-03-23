@extends('layout.template.master')
@section('title', 'Informasi Fakultas')
@section('inf','active')

@section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Informasi Fakultas {{ $data[0] }}, Jurusan {{ $data[1] }}</h1>
    </div>
@endsection