const input = document.querySelector("input#year");
const diagram = document.querySelectorAll("div#diagram div");

let year = input.value;
diagram.forEach(element => {
    if(!element.classList.contains(year))
        element.style.setProperty("display","none");
});
input.addEventListener('input', e => {
    year = e.target.value;
    diagram.forEach(element => {
        if(!element.classList.contains(year))
            element.style.setProperty("display","none");
        else
            element.style.setProperty("display", "block");
    });
})
