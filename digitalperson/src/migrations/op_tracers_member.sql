CREATE TABLE op_tracers_member
(
	id_tracer INT NOT NULL AUTO_INCREMENT,
	id_member INT NOT NULL DEFAULT 0,
	tracer_hash VARCHAR(200) NOT NULL DEFAULT '',
	created_at DATETIME NOT NULL DEFAULT NOW(),
	updated_at DATETIME NOT NULL DEFAULT NOW(),
	PRIMARY KEY (id_tracer)
)