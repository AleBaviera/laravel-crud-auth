@extends('layouts.cats-layout')
@section('content')
<div class="box">
  <form class="" action="{{route('storeCat')}}" method="post">
    @csrf
    @method('POST')
    <div class="">
      <label for="name">name: </label>
      <input type="text" name="name" value="">
    </div>
    <div class="">
      <label for="race">race: </label>
      <input type="text" name="race" value="">
    </div>
    <div class="">
      <label for="cat_rfid">cat code: </label>
      <input type="text" name="cat_rfid" value="">
    </div>
    <button type="submit" name="button">ADD</button>
  </form>
</div>

@endsection
