/*creacion de la BD master*/
CREATE DATABASE master

/*unica tabla que debe ir en la bd de master*/
CREATE TABLE operacion_conexiones (
	idConexion INT AUTO_INCREMENT PRIMARY KEY
	,Nombre VARCHAR(100)
	,Codigo VARCHAR(200)
	,Conexion VARCHAR(100)
	,idEstado INT
)

/*creacion de BD pwebservidor*/
CREATE DATABASE pwebservidor

/*tablas de pwebservidor*/
CREATE TABLE operacion_modulo (
	idModulo INT AUTO_INCREMENT PRIMARY KEY
	,Identificador VARCHAR(100)
	,Texto VARCHAR(100)
	,Icono VARCHAR(100)
	,Url VARCHAR(100)
	,Estado INT
	,FechaCreacion DATE
	,UsuarioCreacion INT
)

CREATE TABLE operacion_usuarios (
	idUsuario INT AUTO_INCREMENT PRIMARY KEY
	,Nombre VARCHAR(100)
	,Usuario VARCHAR(100)
	,Contrasenia VARCHAR(100)
	,TipoUsuario VARCHAR(100)
	,Estado INT
	,FechaIngreso DATE
	,UsuarioIngreso INT
	,FechaActualizacion DATE
	,UsuarioActualizacion INT
)

CREATE TABLE sis_estado (
	Estado INT AUTO_INCREMENT PRIMARY KEY
	,Descripcion VARCHAR(100)
)

CREATE TABLE sis_estado_civil (
	EstadoCivil INT AUTO_INCREMENT PRIMARY KEY
	,Descripcion VARCHAR(100)
    ,Estado int
)

CREATE TABLE sis_genero (
	Genero INT AUTO_INCREMENT PRIMARY KEY
	,Descripcion VARCHAR(100)
    ,Estado int
)

CREATE TABLE sis_tipo_registro (
	TipoRegistro INT AUTO_INCREMENT PRIMARY KEY
	,Descripcion VARCHAR(100)
    ,Estado int
)

CREATE TABLE sis_tipo_usuario (
	TipoUsuario INT AUTO_INCREMENT PRIMARY KEY
    ,Descripcion VARCHAR(100)
    ,Estado int
)

CREATE TABLE sis_persona (
	Persona INT AUTO_INCREMENT PRIMARY KEY
	,Codigo VARCHAR(100)
	,Nombres VARCHAR(100)
	,ApellidoPaterno VARCHAR(100)
	,ApellidoMaterno VARCHAR(100)
	,NombreCompleto VARCHAR(100)
	,FechaNacimiento DATE
	,Genero INT
	,EstadoCivil INT
	,Correo VARCHAR(100)
	,Telefono VARCHAR(100)
	,Estado INT
)

CREATE TABLE sis_personal (
	Persona INT AUTO_INCREMENT PRIMARY KEY
    ,Codigo VARCHAR(100)
    ,Nombres VARCHAR(100)
    ,PrimerApellido VARCHAR(100)
    ,SegundoApellido VARCHAR(100)
    ,NombreCompleto VARCHAR(100)
    ,TipoRegistro int
    ,Materia int
    ,Correo VARCHAR(100)
    ,Telefono VARCHAR(100)
    ,Estado int
)

