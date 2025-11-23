@extends('layouts.app')

@section('title','Activitas')
{{-- menu yg active --}}
@section('menuAdminActivitas','active')
{{-- memanggil livewire --}}
@section('content')
    @livewire('admin.activitas.index')
@endsection
