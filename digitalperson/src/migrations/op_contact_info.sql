CREATE TABLE op_contact_info
(
	id_contact INT NOT NULL AUTO_INCREMENT,
    fullname varchar(200) NOT NULL DEFAULT '',
	email varchar(200) NOT NULL DEFAULT '',
    subjects varchar(200) NOT NULL DEFAULT '',
	comments text,
	created_at DATETIME NOT NULL DEFAULT NOW(),
	updated_at DATETIME NOT NULL DEFAULT NOW(),
	PRIMARY KEY (id_contact)
)