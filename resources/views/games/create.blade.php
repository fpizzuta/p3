@extends('layouts.pages');

@push('styles')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='{{ asset('css/page.css') }}' rel='stylesheet'>
    <link href='{{ asset('css/form.css') }}' rel='stylesheet'>
@endpush

@push('body')
    <div class="box">
        <h2>New Game</h2>
        <form method='POST' action='/games'>
            @csrf
            <div class="inputBox">
                <input type="text" name="gameName" placeholder="Name of Game" >
            </div>
            <div class="inputBox">
                <input type="date" name="Date">
                {{--<label>Date</label>--}}
            </div>
            <div class="player">
                <fieldset>
                    <legend>Player 1</legend>
                    <div class="inputBox">
                        <input type="text" name="p1_Name" placeholder='Name'>
                    </div>
                    <div class="inputBox">
                        <input type="number" name="p1_Score" placeholder='Score'>
                    <div class="inputBox winner">
                        <input type="checkbox" name="p1_Winner">
                        <label>Winner</label>
                    </div>
                </fieldset>
            </div>
            <div class="player">
                <fieldset>
                    <legend>Player 2</legend>
                    <div class="inputBox">
                        <input type="text" name="p2_Name" placeholder='Player 2 Name'>

                    </div>
                    <div class="inputBox">
                        <input type="number" name="p2_Score" placeholder='Score'>

                    </div>
                    <div class="inputBox">
                        <input type="checkbox" name="p2_Winner">
                        <label>Winner</label>
                    </div>
                </fieldset>
            </div>
            <div class="player">
                <fieldset>
                    <legend>Player 3</legend>
                    <div class="inputBox">
                        <input type="text" name="p3_Name" placeholder='Player 3 Name'>

                    </div>
                    <div class="inputBox">
                        <input type="number" name=p3_Score"" placeholder='Score'>

                    </div>
                    <div class="inputBox">
                        <input type="checkbox" name="p3_Winner">
                        <label>Winner</label>
                    </div>
                </fieldset>
            </div>
            <div class="player">
                <fieldset>
                    <legend>Player 4</legend>
                    <div class="inputBox">
                        <input type="text" name="p4_Name" placeholder='Player 4 Name'>

                    </div>
                    <div class="inputBox">
                        <input type="number" name="p4_Score" placeholder='Score'>

                    </div>
                    <div class="inputBox">
                        <input type="checkbox" name="p4_Winner">
                        <label>Winner</label>
                    </div>
                </fieldset>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
@endpush
