@extends('layouts.app')

@section('title','Pemasukan')
{{-- menu yg active --}}
@section('menuAdminKeuangan','active')
{{-- memanggil livewire --}}
@section('content')
    @livewire('admin.keuangan.index')
@endsection
