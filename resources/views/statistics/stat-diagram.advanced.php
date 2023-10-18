@extends('layout')
@includes('includes/navBar', ['admin' => $admin])
<div class="container-fluid d-flex flex-column d-flex align-items-center justify-content-center my-5" style="margin-top: 74px;">
    
    @includes('includes/category', ['categories' => $categories])
    
    <h4 class="text-primary mt-4"> Commandes annulées </h4>

    <p class="card mt-4 d-flex flex-row align-items-center justify-content-center p-2 border-radius-3">
        <span class="fw-semibold mx-3">Année:</span>
        <input 
            style="width: 100px;" 
            class=" d-inline form-control text-center align-middle" 
            type="number" 
            name="year" 
            id="year" 
            value="{{ $year }}" 
            min="2021"
            max="{{ $year }}">
    </p>

    <div 
        class="card d-flex flex-column align-items-center justify-content-center w-75 mt-4 p-5" 
        style="height: 500px;">

        <div 
            class="d-flex justify-content-around align-items-end border-bottom border-primary w-100 h-75" 
            id="diagram">
            @foreach($statistics[ 'value' ] as $year => $values)
                @foreach($values as $value)
                    <div class="bg-danger {{ $year }}" style="width: 4px; height: {{ $value }}%;"></div>
                @endforeach
            @endforeach
        </div>
        <div class="d-flex justify-content-around w-100">
            @foreach($statistics[ 'keys' ] as $value)
                <div class="fw-lighter mx-2">{{ $value }}</div>
            @endforeach
        </div>

    </div>

</div>
