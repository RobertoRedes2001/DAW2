//Funciones
function saveUser2() {
    const nombre = document.getElementsByTagName("input")[6].value;
    const apellido1 = document.getElementsByTagName("input")[7].value;
    const apellido2 = document.getElementsByTagName("input")[8].value;
    const dni = document.getElementsByTagName("input")[9].value;
    const color = document.getElementsByTagName("select")[0].options[document.getElementsByTagName("select")[0].selectedIndex].textContent;
 
    if (typeof(Storage) !== "undefined") {
        let usuariosGuardados2 = JSON.parse(localStorage.getItem("usuarios")) || [];
        const nuevoUsuario2 = { nombre, apellido1, apellido2, dni, color };
        usuariosGuardados2.push(nuevoUsuario2);
        localStorage.setItem("usuarios", JSON.stringify(usuariosGuardados2));
        alert("Datos Guardados");
    }
}

function deleteUser2(dni) {
    if (typeof(Storage) !== "undefined") {
        let usuariosGuardados2 = JSON.parse(localStorage.getItem("usuarios")) || [];
        const indice = usuariosGuardados2.findIndex(user => user.dni === dni);
        if (indice !== -1) {
            usuariosGuardados2.splice(indice, 1);
            localStorage.setItem("usuarios", JSON.stringify(usuariosGuardados2));
            alert("Usuario eliminado");
        } else {
            alert("Usuario no encontrado");
        }
    }
}

function deleteAllUsers2() {
    if (typeof(Storage) !== "undefined") {
        localStorage.clear();
        alert("Datos eliminados");
    }
}

//Apartado del formulario
const formulario2 = document.getElementsByTagName("form")[1];
formulario2.addEventListener("submit", function (event) {
    event.preventDefault();
    saveUser2();
});

const verDatos2 = document.getElementsByTagName("button")[5];
verDatos2.addEventListener("click", function () {
    const dniCliente = document.getElementsByTagName("input")[10].value;
    if (typeof(Storage) !== "undefined") {
        const usuariosGuardados = JSON.parse(localStorage.getItem("usuarios")) || [];
        const usuario = usuariosGuardados.find(user => user.dni === dniCliente);
        if (usuario) {
           document.getElementsByTagName("label")[2].innerText = "Hola " + usuario.nombre + " " + usuario.apellido1 + " " + usuario.apellido2;
           document.getElementsByTagName("label")[2].style.color = usuario.color;
        } else {
            alert("Usuario no encontrado");
        }
    }
});

const borrarUsu2 = document.getElementsByTagName("button")[6];
borrarUsu2.addEventListener("click", function () {
    const dniCliente = document.getElementsByTagName("input")[10].value;
    deleteUser2(dniCliente);
});

const borrarTodos2 = document.getElementsByTagName("button")[7];
borrarTodos2.addEventListener("click", function () {
    deleteAllUsers2();
});