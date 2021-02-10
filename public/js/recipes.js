function dlImg() {

    var img = document.createElement("img");
    var imgCtn = document.getElementById("imgCtn");
    
    img.src = document.getElementById("imgDl").value;
    img.height = 275;
    img.width = 540;
    imgCtn.appendChild(img);
}

function addIngredient() {

}