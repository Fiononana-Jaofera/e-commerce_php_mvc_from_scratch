const priceColumn = document.querySelectorAll("input.price-column");
const quantityColumn = document.querySelectorAll("input.quantity-column");
const resultColumn = document.querySelectorAll("input.total-column");
const finalTotal = document.querySelector("input#total");

let priceTotal;

quantityColumn.forEach( quantity => {
    quantity.addEventListener('input', function () {
        let val = this.value;
        let total;
        priceTotal = 0;
        priceColumn.forEach( price => {
            if ( price.id === quantity.id ) {
                total = price.value * val;
            }
        } )
        resultColumn.forEach( result => {
            if ( quantity.id === result.id ) {
                result.value = total;
            }
        } )
        resultColumn.forEach( result => {
            priceTotal += Number(result.value);
        })
        finalTotal.value = priceTotal;
    })
})