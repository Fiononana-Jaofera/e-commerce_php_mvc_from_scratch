@extends('layout')
@includes('includes/navBar', ['admin' => $admin])
<h2 class="text-primary" style="margin-top: 75px;"> Notifications</h2>
@foreach($notifications as $key => $notification)
<div class="card d-flex flex-column align-items-start p-3 shadow m-3" style="width: 600px; height: max-content;">
    <div class="d-flex" style="width: max-content;">
        <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.5254 12.5996V8.40039H10.4746V12.5996H12.5254ZM12.5254 16.75V14.6504H10.4746V16.75H12.5254ZM0.0253906 19.875L11.5 0.0996094L22.9746 19.875H0.0253906Z" fill="red" fill-opacity="1"/>
        </svg>
        <p class="mx-4 text-danger fw-bold">{{ $notification['type'] }}</p>
    </div>
    <div class="d-flex" style="width: max-content;">
        <p class="fw-semibold text-primary ms-4">Message: </p>
        <p class="mx-2">{{ $notification['message'] }}</p>
    </div>
    <div class="d-flex" style="width: max-content;">
        <p class="fw-semibold text-primary ms-4">id_produit: </p>
        <p class="mx-2">{{ $notification['product_id'] }}</p>
    </div>
    <div class="container-fluid d-flex justify-content-between mt-3">
        <p>{{ $notification['date'] }}</p> 
        <button class="btn btn-primary">Consulter</button>
    </div>
</div>
@endforeach
