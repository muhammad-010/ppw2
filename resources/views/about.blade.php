<!-- @extends('master')

@section('title', 'About Us')

@section('content')
    <h2>About Our Departement</h2>
    <p>We are a 'cultural heritage' of yogyakarta.</p>
@endsection -->

@extends('master')

@section('content')
    <div class="content">
        <h2>About Us</h2>
        <p>Nama: {{ $name }}</p>
        <p>Email: {{ $email }}</p>
    </div>
@endsection