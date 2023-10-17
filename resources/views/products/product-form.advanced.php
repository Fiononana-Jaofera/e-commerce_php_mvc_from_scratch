@extends('layout')
@includes('includes/navBar', ['admin' => true])
<div class="container-fluid  min-vh-100 d-flex justify-content-center align-items-center">
    <div class="bg-info rounded pb-5" style="height: max-content; width: max-content;">
        <h3 class="text-primary text-center mt-5"><?= isset($update)? "Modification d'information" : "Nouveau produit"?></h3>
        <form action="" method="post" class="text-primary d-flex flex-wrap justify-content-center align-items-center p-4" enctype="multipart/form-data">
            <Fieldset class="inputContainer" class=" container w-50">
                @if(!isset($update) || $update != true )
                    <legend class="text-primary z-2 mx-2">Inserez une image</legend>
                @endif
                <div 
                id="image_display"
                style="
                        width: 365px;
                        height: 365px;
                        background-position: center;
                        background-size: cover;
                        background-repeat: no-repeat;
                        <?=isset($product['image'])? "background-image: url({$product['image']});" : ""?>
                        "
                class="bg-white"
                >
                    <input required type="file" name="image" id="image_input" accept="image/png, image/jpg, image/jpeg" class="position-relative top-50 start-50 translate-middle btn"> 
                </div>
            </Fieldset> 
            <div class="container w-50 pt-5 ms-3 m-0">
                <div class="input-group mb-3" style="width:100;">
                    <span class="input-group-text"><label for="name" class="text-primary">Nom :</label></span>
                    <input type="text" class="form-control align-middle text-center" id="name" value="<?=isset($product['name'])? $product['name'] : ""?>">
                </div>
                <div class="input-group mb-3" style="width:100;">
                    <span class="input-group-text"><label for="floatingprice" class="text-primary">Prix unitaire :</label></span>
                    <input type="number" class="form-control text-end align-middle" id="floatingprice" min="0" placeholder="0,00€" value="<?=isset($product['price'])? $product['price'] : ""?>">
                </div>
                <div class="input-group mb-3" style="width:100;">
                    <span class="input-group-text"><label for="floatingQuantity" class="text-primary">Quantité :</label></span>
                    <input type="number" class="form-control text-end align-middle" id="floatingQuantity" min="0" placeholder="0" value="<?=isset($product['quantity'])? $product['quantity'] : ""?>">
                </div>
                <div class="input-group mb-3" style="width:100;">
                    <span class="input-group-text"><label for="floatingThreshold" class="text-primary">Seuil minimal :</label></span>
                    <input type="number" class="form-control text-end align-middle" id="floatingThreshold" min="0" placeholder="0" value="<?=isset($product['min_threshold'])? $product['min_threshold'] : ""?>">
                </div>
                <select name="" id="" class="form-select form-select-md mb-3">
                    <option <?= isset($product['category'])? "":"selected"?>>Catégorie</option>
                    <option value="technologies" <?= isset($product['category']) && $product['category']=="technologies"? "selected" : ""?>>Technologie</option>
                    <option value="nourritures"<?= isset($product['category']) && $product['category']=="nourritures"? "selected" : ""?>>Nourritures</option>
                    <option value="boissons"<?= isset($product['category']) && $product['category']=="boissons"? "selected" : ""?>>Boissons</option>
                    <option>+Nouveau catégorie</option>
                </select>
                <select name="" id="" class="form-select form-select-md mb-3">
                    <option <?= isset($product['origin'])? "":"selected"?>>Origin</option>
                    <option value="Paris" <?= isset($product['origin']) && $product['origin']=="Paris"? "selected" : ""?>>Paris</option>
                    <option value="China" <?= isset($product['origin']) && $product['origin']=="China"? "selected" : ""?>>China</option>
                </select>
                <div class="w-100 mt-4 text-center">
                    <button type="submit" class="btn btn-success mx-3">Valider</button>
                    <a href="/admin/products" class="btn btn-danger mx-3">Annuler</a>
                </div>

            </div> 
        </form>
    </div>
</div>
