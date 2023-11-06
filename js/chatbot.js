// Función para abrir el modal y ocultar el botón de chat
document.getElementById("openModal").addEventListener("click", function () {
    document.getElementById("openModal").style.display = "none"; // Oculta el botón de chat
    document.getElementById("modalchat").style.display = "block"; // Muestra el modal
});

// Función para cerrar el modal y mostrar el botón de chat
document.getElementById("closeModalchat").addEventListener("click", function () {
    document.getElementById("modalchat").style.display = "none"; // Oculta el modal
    document.getElementById("openModal").style.display = "block"; // Muestra el botón de chat
});

