@extends('layout')
@includes('includes/navBar', ['admin' => true])
<div class="container d-flex flex-column align-items-center bg-light rounded mb-5 w-75" style="margin-top: 75px;">
    <h2 class="text-primary mt-5">Liste des commandes</h2>
    <table class="table table-hover table-borderless w-75 my-3">
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-center">Date</th>
                <th scope="col" class="text-center">Heure</th>
                <th scope="col" class="text-center">id_commande</th>
                <th scope="col" class="text-center">id_client</th>
                <th scope="col" class="text-center">montant total</th>
                <th scope="col" class="text-center">status</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach($orders as $key => $order)
                <tr style="height: 60px;">
                    <td class="text-center align-middle">{{ $order['date'] }}</td>
                    <td class="text-center align-middle">{{ $order['time'] }}</td>
                    <td class="text-center align-middle">{{ $order['id'] }}</td>
                    <td class="text-center align-middle"><a href="/admin/clients/{{ $order['client'] }}/dashboard">{{ $order['client'] }}</a></td>
                    <td class="text-center align-middle">{{ $order['totalPrice'] }}€</td>
                    <td class="text-center align-middle">
                    <select name="" id="" class="form-select form-select-md">
                        <option value="en cours" <?= ($order['status'] == 'en cours')? "selected" : "" ?>>En cours</option>
                        <option value="annulé" <?= ($order['status'] == 'annulé')? "selected" : "" ?>>Annulé</option>
                        <option value="livré" <?= ($order['status'] == 'livré')? "selected" : "" ?>>Livré</option>
                    </select>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>