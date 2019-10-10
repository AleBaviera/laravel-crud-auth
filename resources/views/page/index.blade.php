@extends('layouts.cats-layout')
@section('content')

<div class="">
  <a href="{{route('addCat')}}"><h5>ADD CAT</h5></a>

</div>
<?php foreach ($cats as $cat): ?>
  <div class="box">
    <p>name: {{$cat-> name}}</p>
    <p>race: {{$cat-> race}}</p>
    <p>cat code: {{$cat-> cat_rfid}}</p>
    <a href="{{route('addCat')}}"><h5>DELETE CAT</h5></a>
    <a href="{{route('editCat', $cat -> id)}}"><h5>UPDATE CAT</h5></a>
  </div>

<?php endforeach; ?>
@endsection
