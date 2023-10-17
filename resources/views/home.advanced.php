@extends('layout')
@includes('includes/navBar')
<div class="container-fluid d-flex flex-column d-flex justify-content-center mt-5">
        @includes('includes/category', ['categories' => $categories])
       <div class="container-fluid d-flex align-items-center justify-content-center">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3" style="width: 90%; justify-content:center;">
                @foreach( $products as $i => $product)
                    @if( $category !== 'all' && $category === $product['category'] || $category === 'all')
                        <div class="my-4 mx-4" style="width: 300px;">
                            <div class="card text-primary shadow bg-body-tertiary" style="width: 100%; overflow:hidden;">
                                <div class="card-header fw-bold ">
                                    {{ $product['name'] }}
                                </div>
                                <div class="d-flex justify-content-center">
                                    <img src="{{ $product['image'] }}" alt="ordinateur" style="height: 250px;">
                                </div>
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div class="card-text fw-bold"> {{ $product['price'] }}€</div>
                                    <a class="btn btn-primary" href="/products/view/{{ $product['id'] }}">Acheter</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
           </div>
       </div>
       <a class="container bg-white p-2 rounded shadow bg-body-tertiary" style="width: max-content; position: fixed; bottom: 5rem; right: 5rem;" href="/products/ordered">
       <svg width="47" height="41" viewBox="0 0 47 41" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M20.1372 30.6797C20.9836 31.526 21.9601 31.9492 23.0669 31.9492C24.1737 31.9492 25.1502 31.526 25.9966 30.6797C26.8429 29.8333 27.2661 28.8568 27.2661 27.75C27.2661 26.6432 26.8429 25.6667 25.9966 24.8203C25.1502 23.974 24.1737 23.5508 23.0669 23.5508C21.9601 23.5508 20.9836 23.974 20.1372 24.8203C19.2909 25.6667 18.8677 26.6432 18.8677 27.75C18.8677 28.8568 19.2909 29.8333 20.1372 30.6797ZM16.8169 15.25H29.3169L23.0669 6.07031L16.8169 15.25ZM33.9067 15.25H43.8677C44.4536 15.25 44.9419 15.4453 45.3325 15.8359C45.7882 16.2266 46.0161 16.7148 46.0161 17.3008C45.3651 19.9049 44.3885 23.5833 43.0864 28.3359C41.7843 33.0234 40.9705 35.9857 40.645 37.2227C40.0591 39.2409 38.7244 40.25 36.6411 40.25H9.49268C7.40934 40.25 6.07471 39.2409 5.48877 37.2227L0.215332 17.8867C0.150228 17.7565 0.117676 17.5612 0.117676 17.3008C0.117676 16.7148 0.312988 16.2266 0.703613 15.8359C1.15934 15.4453 1.68018 15.25 2.26611 15.25H12.2271L21.3091 1.57812C21.6997 0.992188 22.2856 0.699219 23.0669 0.699219C23.9132 0.699219 24.4992 0.992188 24.8247 1.57812L33.9067 15.25Z" fill="#FF0000" fill-opacity="0.65"/>
       </svg>
       </a>
</div>
