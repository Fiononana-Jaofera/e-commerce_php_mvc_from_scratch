@extends('layout')
@includes('includes/navBar')
<div class="container d-flex flex-column align-items-center bg-light rounded mb-3 w-75" style="margin-top: 100px;">
    <h2 class="text-primary my-5">Votre panier</h2>
    <table class="table table-hover table-borderless w-75 mb-5">
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-center">Nom produit</th>
                <th scope="col" class="text-center">Prix unitaire</th>
                <th scope="col" class="text-center">Quantités</th>
                <th scope="col" class="text-center">Montant total</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach( $products as  $i => $product)
            <tr style="height: 60px;">
                <td class="text-center align-middle">
                    <input style="width:200px;" class="form-control text-center align-middle d-inline" type="text" name="name" value="{{ $product['name'] }}" readonly>
                </td>
                <td class="text-center align-middle">
                    <input style="width:100px;" class="form-control text-end align-middle d-inline price-column" type="text" name="price" id="{{ $product['id'] }}" value=" {{ $product['price'] }}" readonly> €
                </td>
                <td class="align-middle d-flex align-items-center justify-content-center">
                    <input style="width:100px;" class="form-control text-center align-middle quantity-column" type="number" name="quantity" id="{{ $product['id'] }}" placeholder="0" min="0">
                </td>
                <td class="text-center align-middle">
                    <input type="text" style="width:100px;" class="form-control text-end align-middle d-inline total-column" name="pt" id="{{ $product['id'] }}" readonly>€
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3"></td>
                <td class="text-center align-middle">
                    <span class="fw-semibold">Total:</span>
                    <input type="text" style="width:100px;" class="form-control text-end align-middle d-inline" name="total" id="total" readonly>€
                </td>
            </tr>
        </tbody>
        <tfoot style="height: 50px">
            <tr>
                <td colspan="2" class="text-end"><button class="btn btn-danger">Annuler</button></td>
                <td colspan="2" class="text-start"><button class="btn btn-success">Valider</button></td>
            </tr>
        </tfoot>
    </table>
</div>