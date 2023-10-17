@extends('layout')
@includes('includes/navBar', ['admin' => true])
<div class="container d-flex flex-column align-items-center bg-light rounded mb-5 w-75" style="margin-top: 75px;">
    <h2 class="text-primary mt-5">Liste des produits</h2>
    @includes('includes/category', ['categories' => $categories])
    <table class="table table-hover table-borderless w-75 mb-3">
        <thead class="table-dark">
            <tr>
                <th></th>
                <th scope="col" class="text-center">Nom</th>
                <th scope="col" class="text-center">Catégories</th>
                <th scope="col" class="text-center">Quantités en stock</th>
                <th scope="col" class="text-center">Prix unitaire</th>
                <th scope="col" class="text-center">Disponibilité</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach($products as $key => $product)
                @if($category=='all' || $category!='all' && $category==$product['category'])
                    <tr style="height: 60px;">
                        @if($delete == true)
                            <td class="align-middle"><input type="checkbox" name="" id="" class="form-check-input"></td>
                        @else
                            <td class="align-middle"><a href="/admin/products/view/{{ $product['id'] }}">Voir plus</a></td>
                        @endif
                        <td class="text-center align-middle">{{ $product['name'] }}</td>
                        <td class="text-center align-middle">{{ $product['category'] }}</td>
                        <td class="text-center align-middle">{{ $product['quantity'] }} pièces</td>
                        <td class="text-center align-middle">{{ $product['price'] }}€</td>
                        @if($product['quantity'] <= $product['min_threshold'])
                            <td class="text-center align-middle">Non</td>
                        @else
                            <td class="text-center align-middle">Oui</td>
                        @endif
                    </tr>
                @endif
            @endforeach
        </tbody>
        <tfoot style="height: 50px">
            <tr style="height: 100px;">
                <td colspan="6" class=" text-center align-middle">
                    @if($delete == true)
                        <a href="/admin/products<?= ($category == 'all')? "" : "/$category"; ?>" class="btn mx-3 btn-primary">Retour</a>
                        <button class="btn mx-3 btn-danger">Valider</button>
                    @else 
                        <a href="/admin/products/new" class="btn mx-3 btn-primary">Ajouter</a>
                        <a href="/admin/products/delete<?= ($category == 'all')? "" : "/$category"; ?>" class="btn mx-3 btn-danger">Supprimer</a>
                    @endif
                </td>
            </tr>
        </tfoot>
    </table>
</div>