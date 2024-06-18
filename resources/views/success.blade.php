@extends('layout')

@section('title', 'Success, Yay!')

@section('content')

<div class="py-5 text-center" style="margin-bottom: 300px">
    <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
    <h2 style="font-weight: bolder;">Transaction Success!</h2>
    <p style="padding-top: 10px; margin-top: 15px"> 
        Want to cancel your transaction?
    </p> 
    <a class="btn btn-lg btn-block" href="{{ route('transaction.history') }}" style="margin-top: 25px; background-color: red; margin-right:12px; width: 120px">Cancel</a>
    <a class="btn btn-lg btn-block" href="{{ route('home') }}" style="margin-top: 25px; background-color:#EDDD5E; width: 120px">Continue</a>
</div>


@endsection