const selectElement = document.getElementById("mySelect");
const formWedding = document.getElementById("form-wedding");
const formChristening = document.getElementById("form-christening");
const button = document.getElementById("button");

selectElement.addEventListener("change", function() {
// Hide all forms first
formWedding.style.display = "none";
formChristening.style.display = "none";
button.style.display = "none";

if (this.value === "wedding") {
    formWedding.style.display = "block";
} else if (this.value === "christening") {
    formChristening.style.display = "block";
}else{
    button.style.display = "block";
}
});
