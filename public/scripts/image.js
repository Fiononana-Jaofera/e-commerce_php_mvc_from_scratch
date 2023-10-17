const image_input = document.querySelector("#image_input");
var uploaded_image = "";
var data = new FormData();

image_input.addEventListener('change', async (event)=>{
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploaded_image = reader.result;
        document.querySelector("#image_display").style.backgroundImage = `url(${uploaded_image})`;
    });
    reader.readAsDataURL(event.target.files[0]);
    data.append('image', event.target.files[0]);
})