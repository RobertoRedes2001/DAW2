document.getElementById("form").addEventListener("submit", function (event) {
    event.preventDefault();
    let category = document.getElementById('demo-category').value;
    if (category === "Categoria") {
        alert("Por favor, introduce una categoría")
    } else {
        alert("La categoría introducida es " + `${category}`);
    }
});