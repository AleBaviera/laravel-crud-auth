@extends('layouts.cats-layout')
@section('content')

<?php foreach ($cats as $cat): ?>
  <div class="box">
    <p>name: {{$cat-> name}}</p>
    <p>race: {{$cat-> race}}</p>
    <p>cat code: {{$cat-> cat_rfid}}</p>
  </div>
<?php endforeach; ?>
@endsection
