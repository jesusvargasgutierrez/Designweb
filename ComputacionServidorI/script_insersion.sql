INSERT INTO operacion_modulo (
	idModulo
	,Identificador
	,Texto
	,Icono
	,Url
	,Estado
	,FechaCreacion
	,UsuarioCreacion
	)
VALUES (
	0
	,'Clientes'
	,'Clientes'
	,'fas fa-users'
	,''
	,1
	,'2020/08/17'
	,1
	)

INSERT INTO operacion_modulo (
	idModulo
	,Identificador
	,Texto
	,Icono
	,Url
	,Estado
	,FechaCreacion
	,UsuarioCreacion
	)
VALUES (
	0
	,'Empleados'
	,'Empleados'
	,'fas fa-building'
	,''
	,1
	,'2020/08/17'
	,1
	)

INSERT INTO operacion_modulo (
	idModulo
	,Identificador
	,Texto
	,Icono
	,Url
	,Estado
	,FechaCreacion
	,UsuarioCreacion
	)
VALUES (
	0
	,'Seguridad'
	,'Seguridad'
	,'fas fa-shield-alt'
	,''
	,1
	,'2020/08/17'
	,1
	)

INSERT INTO operacion_modulo (
	idModulo
	,Identificador
	,Texto
	,Icono
	,Url
	,Estado
	,FechaCreacion
	,UsuarioCreacion
	)
VALUES (
	0
	,'Usuarios'
	,'Usuarios'
	,'fas fa-user'
	,''
	,1
	,'2020/08/17'
	,1
	)

INSERT into sis_estado (Estado,Descripcion) VALUES(0,'Activo')
INSERT into sis_estado (Estado,Descripcion) VALUES(0,'Inactivo')

INSERT into sis_estado_civil (EstadoCivil,Descripcion,Estado) VALUES(0,'Soltero',1)
INSERT into sis_estado_civil (EstadoCivil,Descripcion,Estado) VALUES(0,'Casado',1)

INSERT into sis_estado_genero (Genero,Descripcion,Estado) VALUES(0,'Hombre',1)
INSERT into sis_estado_genero (Genero,Descripcion,Estado) VALUES(0,'Mujer',1)

INSERT into sis_estado_registro (TipoRegistro,Descripcion,Estado) VALUES(0,'Alumno',1)
INSERT into sis_estado_registro (TipoRegistro,Descripcion,Estado) VALUES(0,'Maestro',1)

INSERT into sis_tipo_usuario (TipoUsuario,Descripcion,Estado) VALUES(0,'Administrador',1)

INSERT INTO operacion_usuarios(idUsuario, Nombre, Usuario, Contrasenia, TipoUsuario, Estado, FechaIngreso, UsuarioIngreso, FechaActualizacion, UsuarioActualizacion) 
VALUES (0,'Administrador','d5aa170e875913b89d169c57b96b452548fabfff','5ed547d7adec8ded22e147c4f489d578869d6e48',1,1,'2020-07-08',1,'2020-07-08',1)