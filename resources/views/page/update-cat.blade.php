@extends('layouts.cats-layout')
@section('content')
<div class="box">
  <form class="" action="{{route('updateCat', $cat -> id)}}" method="post">
    @csrf
    @method('POST')
    <div class="">
      <label for="name">name: </label>
      <input type="text" name="name" value="{{$cat -> name}}">
    </div>
    <div class="">
      <label for="race">race: </label>
      <input type="text" name="race" value="{{$cat -> race}}">
    </div>
    <div class="">
      <label for="cat_rfid">cat code: </label>
      <input type="text" name="cat_rfid" value="{{$cat -> cat_rfid}}">
    </div>
    <button type="submit" name="button">UPDATE</button>
  </form>
</div>

@endsection
