<?php
require 'config.php';

$pdo->exec('CREATE TABLE IF NOT EXISTS autores (id INTEGER PRIMARY KEY, nombre TEXT)');
$pdo->exec('CREATE TABLE IF NOT EXISTS libros (id INTEGER PRIMARY KEY, nombre TEXT, genero TEXT, autor_id INTEGER, FOREIGN KEY (autor_id) REFERENCES autores(id))');
$pdo->exec('CREATE TABLE IF NOT EXISTS contacto (id INTEGER PRIMARY KEY, fecha TEXT, correo TEXT, nombre TEXT, asunto TEXT, comentario TEXT)');

$pdo->exec('INSERT INTO autores (nombre) VALUES ("Gabriel García Márquez"), ("J.K. Rowling"), ("George Orwell")');
$pdo->exec('INSERT INTO libros (nombre, genero, autor_id) VALUES ("Cien Años de Soledad", "Realismo Mágico", 1), ("Harry Potter", "Fantasía", 2), ("1984", "Distopía", 3)');

echo "Base de datos inicializada correctamente.";
?>
