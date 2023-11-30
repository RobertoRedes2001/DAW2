function saveMonument() {
    const monumento = document.getElementsByTagName("input")[12].value;
    const pais = document.getElementsByTagName("input")[13].value;
    const foto = document.getElementsByTagName("input")[14].value;
    console.log(monumento);
    console.log(pais);
    console.log(foto);

    if (typeof(Storage) !== "undefined") {
        let monumentosGuardados = JSON.parse(localStorage.getItem("usuarios")) || [];
        const nuevoMonumento = { monumento, pais, foto };
        monumentosGuardados.push(nuevoMonumento);
        localStorage.setItem("monumentos", JSON.stringify(monumentosGuardados));
        alert("Datos Guardados");
    }
}

function deleteMonument(name) {
    if (typeof(Storage) !== "undefined") {
        let monumentosGuardados = JSON.parse(localStorage.getItem("monumentos")) || [];
        const indice = monumentosGuardados.findIndex(monument => monument.monumento === name);
        if (indice !== -1) {
            monumentosGuardados.splice(indice, 1);
            localStorage.setItem("monumentos", JSON.stringify(monumentosGuardados));
            alert("Monumento eliminado");
        } else {
            alert("Monumento no encontrado");
        }
    }
}

function deleteAllMonuments() {
    if (typeof(Storage) !== "undefined") {
        localStorage.clear();
        alert("Datos eliminados");
    }
}

const formulario3 = document.getElementsByTagName("form")[2];
formulario3.addEventListener("submit", function (event) {
    event.preventDefault();
    saveMonument();
});

const verMonumento = document.getElementsByTagName("button")[9];
verMonumento.addEventListener("click", function () {
    const monumentoABuscar = document.getElementsByTagName("input")[15].value;
    if (typeof(Storage) !== "undefined") {
        const monumentosGuardados = JSON.parse(localStorage.getItem("monumentos")) || [];
        const monumento = monumentosGuardados.find(monu => monu.monumento === monumentoABuscar);
        if (monumento) {
           document.getElementById("title").innerHTML = monumento.monumento + " - " + monumento.pais;
           document.getElementsByTagName("img")[0].src = monumento.foto;
           document.getElementsByTagName("img")[0].width = 1000;
           document.getElementsByTagName("img")[0].height = 720;
        } else {
            alert("Usuario no encontrado");
        }
    }
});

const borrarMonumento = document.getElementsByTagName("button")[10];
borrarMonumento.addEventListener("click", function () {
    const monumentoABuscar = document.getElementsByTagName("input")[15].value;
    deleteMonument(monumentoABuscar);
});

const borrarTodos3 = document.getElementsByTagName("button")[11];
borrarTodos3.addEventListener("click", function () {
    deleteAllMonuments();
});