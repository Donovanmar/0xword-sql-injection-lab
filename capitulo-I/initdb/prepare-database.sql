END;

CREATE DATABASE almacen;
GRANT ALL PRIVILEGES ON DATABASE almacen TO root;
\c almacen;

CREATE TABLE IF NOT EXISTS usuarios (
	id		integer PRIMARY KEY,
	nombre		varchar(40), 
	contrasena	varchar(40), 
	descripcion		varchar(150)
);

CREATE TABLE IF NOT EXISTS productos (
	id		integer PRIMARY KEY,
	referencia	varchar(40),
	nombre		varchar(40),
	precio		integer NOT NULL
);

INSERT INTO usuarios (id, nombre, contrasena, descripcion) VALUES
	(1, 'admin', 'passadmin', 'Administrador'),
	(2, 'usuario1', 'password1', 'Primer Usuario'),
	(3, 'usuario2', 'password2', 'Segundo Usuario'),
	(4, 'leet', 'P@55w0rd', 'El Amigo Friky');

INSERT INTO productos (id, referencia, nombre, precio) VALUES
	(1, 'AAA', 'tornillo', 1),
	(2, 'BBB', 'tuerca', 2),
	(3, 'CCC', 'bombilla', 4),
	(4, 'DDD', 'arandela', 3),
	(5, 'EEE', 'destornillador', 10);
