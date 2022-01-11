CREATE TABLE img_aws_presimap
(
	id_img_aws int NOT NULL AUTO_INCREMENT,
	name_old varchar(100) not null default '',
	name_new varchar(100) not null default '',
	path_file varchar(100) not null default '',
	folder_file varchar(100) not null default '',
	created_at DATETIME NOT NULL DEFAULT NOW(),
	updated_at DATETIME NOT NULL DEFAULT NOW(),
	PRIMARY KEY (id_img_aws)
);