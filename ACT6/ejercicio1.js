//Funciones
function saveUser() {
    const nombre = document.getElementsByTagName("input")[0].value;
    const apellido1 = document.getElementsByTagName("input")[1].value;
    const apellido2 = document.getElementsByTagName("input")[2].value;
    const dni = document.getElementsByTagName("input")[3].value;

    if (typeof(Storage) !== "undefined") {
        let usuariosGuardados = JSON.parse(localStorage.getItem("usuarios")) || [];
        const nuevoUsuario = { nombre, apellido1, apellido2, dni };
        usuariosGuardados.push(nuevoUsuario);
        localStorage.setItem("usuarios", JSON.stringify(usuariosGuardados));
        alert("Datos Guardados");
    }
}

function deleteUser(dni) {
    if (typeof(Storage) !== "undefined") {
        let usuariosGuardados = JSON.parse(localStorage.getItem("usuarios")) || [];
        const indice = usuariosGuardados.findIndex(user => user.dni === dni);
        if (indice !== -1) {
            usuariosGuardados.splice(indice, 1);
            localStorage.setItem("usuarios", JSON.stringify(usuariosGuardados));
            alert("Usuario eliminado");
        } else {
            alert("Usuario no encontrado");
        }
    }
}

function deleteAllUsers() {
    if (typeof(Storage) !== "undefined") {
        localStorage.clear();
        alert("Datos eliminados");
    }
}

//Apartado del formulario
const formulario = document.getElementsByTagName("form")[0];
formulario.addEventListener("submit", function (event) {
    event.preventDefault();
    saveUser();
});

const verDatos = document.getElementsByTagName("button")[1];
verDatos.addEventListener("click", function () {
    const dniCliente = document.getElementsByTagName("input")[4].value;
    if (typeof(Storage) !== "undefined") {
        const usuariosGuardados = JSON.parse(localStorage.getItem("usuarios")) || [];
        const usuario = usuariosGuardados.find(user => user.dni === dniCliente);
        if (usuario) {
            alert("Hola " + usuario.nombre + " " + usuario.apellido1 + " " + usuario.apellido2);
        } else {
            alert("Usuario no encontrado");
        }
    }
});

const borrarUsu = document.getElementsByTagName("button")[2];
borrarUsu.addEventListener("click", function () {
    const dniCliente = document.getElementsByTagName("input")[5].value;
    deleteUser(dniCliente);
});

const borrarTodos = document.getElementsByTagName("button")[3];
borrarTodos.addEventListener("click", function () {
    deleteAllUsers();
});