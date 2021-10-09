CREATE TABLE me_member_info
(
	id_member INT NOT NULL AUTO_INCREMENT,
	fullname varchar(200) NOT NULL DEFAULT '',
    birthday datetime NOT NULL DEFAULT now(),
	position int NOT NULL DEFAULT 0,
	created_at DATETIME NOT NULL DEFAULT NOW(),
	updated_at DATETIME NOT NULL DEFAULT NOW(),
	PRIMARY KEY (id_member)
)