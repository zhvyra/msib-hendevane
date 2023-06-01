# INPUT PELANGGAN
DELIMITER //
CREATE PROCEDURE inputPelanggan(kode VARCHAR(10), nama VARCHAR(50), jk VARCHAR(5), tmp_lahir VARCHAR(50), tgl_lahir DATE, email VARCHAR(50), kartu_id INT)
BEGIN
	INSERT INTO pelanggan(kode,nama,jk,tmp_lahir,tgl_lahir,email,kartu_id)
  VALUES(kode,nama,jk,tmp_lahir,tgl_lahir,email,kartu_id);
END //

CALL inputPelanggan('011020','Marni','P','Jakarta','2023-01-02','marni@gmail.com',1);

# SHOW PELANGGAN
DELIMITER //
CREATE PROCEDURE showPelanggan()
BEGIN
	SELECT * FROM pelanggan;
END //

CALL showPelanggan();

# INPUT PRODUK
DELIMITER //
CREATE PROCEDURE inputProduk(kode VARCHAR(10),prod VARCHAR(50),
	hrg_beli double,hrg_jual double, stok int,min_stok int, idj int
)
BEGIN
	INSERT INTO produk (kode, nama_produk, harga_beli,harga_jual, stok, min_stok,jenis_produk_id)   
	VALUES (kode, prod, hrg_beli,hrg_jual, stok, min_stok, idj);
END //

CALL inputProduk('TV009','Mesin Cuci',15000000, 20000000,4,1,1);

# SHOW PRODUK
DELIMITER //
CREATE PROCEDURE showProduk()
BEGIN
	SELECT * FROM produk;
END //

CALL showProduk();

# TOTAL PESANAN
DELIMITER //
CREATE PROCEDURE totalPesanan()
BEGIN
	SELECT produk.nama_produk, pesanan_items.jumlah, pesanan.total 
  FROM ((pesanan_items INNER JOIN pesanan ON pesanan_items.id_pesanan = pesanan.id)
        INNER JOIN produk ON pesanan_items.id_produk =produk.id);
END //

CALL totalPesanan();

# VIEW PESANAN PRODUK
CREATE VIEW pesanan_produk_vw AS
SELECT pelanggan.nama, pesanan.tanggal, produk.nama_produk, pesanan_items.jumlah, produk.harga_jual,SUM(pesanan_items.jumlah * produk.harga_jual) AS total 
    FROM pesanan
    JOIN pelanggan ON pesanan.pelanggan_id = pelanggan.id
    JOIN pesanan_items ON pesanan.id = pesanan_items.id_pesanan
    JOIN produk ON pesanan_items.id_produk = produk.id
    GROUP BY pesanan.id, produk.id, pelanggan.id;

SELECT * FROM pesanan_produk_vw





