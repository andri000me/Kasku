CREATE TABLE tb_kaskeluar (
	id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	jenis_id VARCHAR(11) NOT NULL,
	deskripsi VARCHAR(255),
	waktu timestamp NOT NULL,
	jumlah VARCHAR(10) NOT NULL,
	FOREIGN KEY(jenis_id) REFERENCES tb_jenispengeluaran(id);
);