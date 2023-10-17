@extends('layout')
@includes('includes/navBar', ['admin' => $admin])
<div class="container-fluid d-flex flex-column d-flex align-items-center justify-content-center mt-5" style="margin-top: 75px;">
    
    @includes('includes/category', ['categories' => $categories])
    
    <h4 class="text-primary mt-5"> {{ $table['title'] }}</h4>

    <table class="table table-hover table-borderless w-75 my-3">

        <thead class="table-dark">
            <tr>
                @foreach( $table['header'] as $header )
                    <th scope="col" class="text-center">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>

        <tbody class="table-group-divider">
            @foreach( $table['body'] as $body )
                <tr style="height: 60px;">
                    @foreach( $body as $value )
                        <td class="text-center align-middle">{{ $value }}</td> 
                    @endforeach                 
                </tr>
            @endforeach
        </tbody>

    </table>

</div>
