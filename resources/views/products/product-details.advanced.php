@extends('layout')
@includes('includes/navBar', ['admin' => $admin])
<div class="container-fluid d-flex flex-column align-items-center justify-content-center">
    <div class="card d-flex flex-column align-items-center justify-content-center" style=" width: 800px; height: max-content; margin-top: 100px; margin-bottom: 100px;">
        <div class="w-100 p-2">
            <a href="<?= ($admin == true)? "/admin/products" : "/" ?>" class="btn-close float-end" aria-label="Close"></a>
        </div>
        <h2 class="text-primary">{{ $product['name'] }}</h2>
        <div class="">
            (<span class="fw-lighter mx-2">{{ $product['category'] }}</span>)
        </div>
        <div class="d-flex flex-row align-items-center mt-5 mb-3">
            <div>
                <img src="{{ $product['image'] }}" class="card-img" alt="ordinateur" style="height: 300px;">
            </div>
            <div class="card-body px-5">
                <p><span class="fw-semibold">Prix:</span><span class="fw-lighter mx-2">{{ $product['price'] }}€</span></p>
                <p><span class="fw-semibold">Origine:</span><span class="fw-lighter mx-2">{{ $product['origin'] }}</span></p>
                @if($admin == true)
                    <p><span class="fw-semibold">Quantité en stock:</span><span class="fw-lighter mx-2">{{ $product['quantity'] }}</span></p>
                    <p><span class="fw-semibold">Seuil minimal:</span><span class="fw-lighter mx-2">{{ $product['min_threshold'] }}</span></p>
                    <p><span class="fw-semibold">Nombres total des commandes:</span><span class="fw-lighter mx-2">{{ $product['ordered'] }}</span></p>
                @else
                    <p>
                        <span class="fw-semibold">Quantités:</span>
                        <input style="width: 75px;" class=" d-inline form-control text-center align-middle" type="number" name="quantity" id="quantité" placeholder="0" min="0">
                    </p>
                    <button class="btn btn-success">Ajouter au panier</button>
                @endif
            </div>
        </div>
        @if($admin == true)
        <div class="card d-flex flex-column w-75 mb-5">
            <h5 class="text-primary p-3">Voir aussi</h5>
            <table class="table table-hover table-borderless">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-center">Nom</th>
                        <th scope="col" class="text-center">Correlation</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($product['correlations'] as $key => $correlation)
                    <tr style="height: 60px;">
                        <td class="text-center align-middle">{{ $correlation['name'] }}</td>
                        <td class="text-center align-middle">{{ $correlation['score'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="w-100 d-flex justify-content-center mb-5">
            <a href="/admin/products/update/{{ $product['id'] }}" class="btn btn-primary mx-5">Modifier</a>
            <button class="btn btn-danger mx-5">Supprimer</button>
        </div>
        @endif
    </div>
</div> 