@extends('layout')
@includes('includes/navBar', ['admin' => true])
<div class="container d-flex flex-column align-items-center bg-light rounded mb-5 w-75" style="margin-top: 75px;">
    <h2 class="text-primary mt-5">Liste des clients</h2>
    <table class="table table-hover table-borderless w-75 my-3">
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-center">id</th>
                <th scope="col" class="text-center">Pseudo</th>
                <th scope="col" class="text-center">Total d'achat</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach( $users as $key => $user )
                <tr style="height: 60px;">
                    <td class="text-center align-middle">{{ $user['id'] }}</td>
                    <td class="text-center align-middle">{{ $user['name'] }}</td>
                    <td class="text-center align-middle">{{ $user['consumption'] }}€</td>         
                </tr>
            @endforeach
        </tbody>
    </table>
</div>