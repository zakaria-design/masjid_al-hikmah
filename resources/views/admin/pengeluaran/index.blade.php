@extends('layouts.app')

@section('title','Pengeluaran')
{{-- menu yg active --}}
@section('menuAdminPengeluaran','active')
{{-- memanggil livewire --}}
@section('content')
    @livewire('admin.pengeluaran.index')
@endsection
