<?php

if (!isset($_SESSION['libros'])) {
    $_SESSION['libros'] = [
        ["titulo" => "Don Quijote de la Mancha", "autor" => "Miguel de Cervantes", "imagen" => "https://picsum.photos/id/24/300/200", "descripcion" => "Las aventuras de un hidalgo que se cree caballero."],
        ["titulo" => "Cien años de soledad", "autor" => "Gabriel García Márquez", "imagen" => "https://picsum.photos/id/42/300/200", "descripcion" => "La historia de la familia Buendía en Macondo."],
        ["titulo" => "El Principito", "autor" => "Antoine de Saint-Exupéry", "imagen" => "https://picsum.photos/id/67/300/200", "descripcion" => "Un pequeño príncipe viaja por distintos planetas."]
    ];
}

function agregarLibro($titulo, $autor, $imagen, $descripcion) {
    $_SESSION['libros'][] = ["titulo" => $titulo, "autor" => $autor, "imagen" => $imagen, "descripcion" => $descripcion];
}

function editarLibro($id, $titulo, $autor, $imagen, $descripcion) {
    if (isset($_SESSION['libros'][$id])) {
        $_SESSION['libros'][$id] = ["titulo" => $titulo, "autor" => $autor, "imagen" => $imagen, "descripcion" => $descripcion];
    }
}

function eliminarLibro($id) {
    if (isset($_SESSION['libros'][$id])) {
        unset($_SESSION['libros'][$id]);
        $_SESSION['libros'] = array_values($_SESSION['libros']);
    }
}
?>