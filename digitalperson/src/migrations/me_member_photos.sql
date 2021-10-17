CREATE TABLE me_member_photos
(
	id_photo INT NOT NULL AUTO_INCREMENT,
	id_member INT NOT NULL DEFAULT 0,
	image_code text,
	created_at DATETIME NOT NULL DEFAULT NOW(),
	updated_at DATETIME NOT NULL DEFAULT NOW(),
	PRIMARY KEY (id_photo)
)