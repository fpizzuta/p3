@extends('layouts.pages2')

@push('styles')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    {{--<link href='{{ asset('css/page.css') }}' rel='stylesheet'>--}}
    <link href='{{ asset('css/newStyle.css') }}' rel='stylesheet'>
@endpush

@push('body')
<div class='wrapper'>
    <div id="page-content" class="page-content flexbox-col">
        <form method='POST' action='/games'>
            @csrf
            <div class="form-group">
                <label class='labels' for='gameName'>Game Name *</label>
                <input type="text" class='form-control' name="gameName" placeholder="Game" value="{{ old('gameName') }}">
                @include('modules.field-error', ['field' => 'gameName'])
            </div>
            <div class="form-group">
                <label class='labels' for='date'>Date *</label>
                <input type="date" class='form-control' name="date" value="{{ old('date') }}">
                @include('modules.field-error', ['field' => 'date'])
            </div>
            <div>
                <fieldset class='Fieldset'>
                    <legend class='legend'>Player 1</legend>
                    <div class="form-group">
                        <input type="text" class='form-control' name="p1_Name" placeholder='Player 1 Name *' value="{{ old('p1_Name') }}"/>
                        @include('modules.field-error', ['field' => 'p1_Name'])
                    </div>
                    <div class="form-group">
                        <input type="number" class='form-control' name="p1_Score" placeholder='Score' value="{{ old('p1_Score') }}"/>
                        @include('modules.field-error', ['field' => 'p1_Score'])
                    </div>
                    <div class="form-group">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"  name="p1_Winner" value="{{ old('p1_Winner') }}"/>
                            Winner
                        </label>
                    </div>
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset class='Fieldset'>
                    <legend class='legend'>Player 2</legend>
                    <div class="form-group">
                        <input type="text" class='form-control' name="p2_Name" placeholder='Player 2 Name' value="{{ old('p2_Name') }}"/>
                        @include('modules.field-error', ['field' => 'p2_Name'])
                    </div>
                    <div class="form-group">
                        <input type="number" class='form-control' name="p2_Score" placeholder='Score' value="{{ old('p2_Score') }}"/>
                        @include('modules.field-error', ['field' => 'p2_Score'])
                    </div>
                    <div class="form-group">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"  name="p2_Winner" value="{{ old('p2_Winner') }}"/>
                            Winner
                        </label>
                    </div>
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset class='Fieldset'>
                    <legend class='legend'>Player 3</legend>
                    <div class="form-group">
                        <input type="text" class='form-control' name="p3_Name" placeholder='Player 3 Name' value="{{ old('p3_Name') }}"/>
                        @include('modules.field-error', ['field' => 'p3_Name'])
                    </div>
                    <div class="form-group">
                        <input type="number" class='form-control' name='p3_Score' placeholder='Score' value="{{ old('p3_Score') }}"/>
                        @include('modules.field-error', ['field' => 'p3_Score'])
                    </div>
                    <div class="form-group">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"  name="p3_Winner" value="{{ old('p3_Winner') }}"/>
                            Winner
                        </label>
                    </div>
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset class='Fieldset'>
                    <legend class='legend'>Player 4</legend>
                    <div class="form-group">
                        <input type="text" class='form-control' name="p4_Name" placeholder='Player 4 Name' value="{{ old('p4_Name') }}"/>
                        @include('modules.field-error', ['field' => 'p4_Name'])
                    </div>
                    <div class="form-group">
                        <input type="number" class='form-control' name="p4_Score" placeholder='Score' value="{{ old('p4_Score') }}"/>
                        @include('modules.field-error', ['field' => 'p4_Score'])
                    </div>
                    <div class="form-group">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"  name="p4_Winner" value="{{ old('p4_Winner') }}"/>
                            Winner
                        </label>
                    </div>
                </fieldset>
            </div>
            <div id='button'>
                <input id="btn" type="submit" value="Create"/>
            </div>
        </form>
    </div>
</div>
@endpush
