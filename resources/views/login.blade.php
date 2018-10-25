@extends('layouts.master');

@push('styles')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='{{ asset('css/style.css') }}' rel='stylesheet'>
@endpush

@push('body')
    <div class="box">
        <h2>Login</h2>
        <form method='GET' action=''>
            <div class="inputBox">
                <input type="text" name="" required="">
                <label>Username</label>
            </div>
            <div class="inputBox">
                <input type="password" name="" required="">
                <label>Password</label>
            </div>
            <input type="submit" name="" value="Submit">
        </form>
    </div>
@endpush
