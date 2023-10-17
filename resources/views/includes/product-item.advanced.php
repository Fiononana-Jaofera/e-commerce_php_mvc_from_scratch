<div class="card text-primary shadow bg-body-tertiary" style="width: 100%; overflow:hidden;">
    <div class="card-header fw-bold ">
        {{ $product['name'] }}
    </div>
    <div class="d-flex justify-content-center">
        <img src="{{ $product['image'] }}" alt="ordinateur" style="height: 250px;">
    </div>
    <div class="card-body d-flex justify-content-between align-items-center">
        <div class="card-text fw-bold"> {{ $product['price'] }} </div>
        <button class="btn btn-primary">Acheter</button>
    </div>
</div>