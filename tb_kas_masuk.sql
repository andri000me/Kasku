CREATE TABLE tb_kasmasuk (
	id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	pengguna_id VARCHAR(11) NOT NULL,
	waktu timestamp NOT NULL,
	jumlah VARCHAR(10),
	FOREIGN KEY(pengguna_id) REFERENCES tb_pengguna(id);
);