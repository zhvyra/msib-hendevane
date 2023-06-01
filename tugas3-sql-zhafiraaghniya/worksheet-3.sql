-- SOAL 3.1 

SELECT * FROM produk WHERE harga_beli * stok > 20000000;

SELECT * , stok - min_stok as selisih FROM produk;

SELECT * , stok * harga_beli as asset FROM produk;

SELECT * FROM pelanggan WHERE YEAR(tgl_lahir) BETWEEN  1999 AND 2004;

SELECT * FROM pelanggan WHERE YEAR(tgl_lahir) = 1998;

SELECT * FROM pelanggan WHERE MONTH(tgl_lahir)=08;

SELECT nama, tmp_lahir, tgl_lahir, YEAR(NOW())-YEAR(tgl_lahir) AS umur FROM pelanggan;

-- SOAL 3.2

SELECT COUNT(*) FROM pelanggan WHERE YEAR(tgl_lahir)=1998;

SELECT COUNT(*) FROM pelanggan WHERE jk="P" AND tmp_lahir="jakarta";

SELECT SUM(stok) FROM produk WHERE harga_jual<10000;

SELECT COUNT(*) FROM produk WHERE kode LIKE "K%";

SELECT AVG(harga_jual) FROM produk WHERE harga_jual>1000000;

SELECT stok FROM produk ORDER BY stok DESC LIMIT 1;

SELECT COUNT(*) FROM produk WHERE stok < min_stok;

SELECT SUM(stok * harga_beli) FROM produk;

-- SOAL 3.3

SELECT id, nama_produk , stok,
CASE 
WHEN stok > min_stok THEN "stok aman"
ELSE "segera belanja"
END as status
FROM produk;

SELECT id, nama, YEAR(NOW())-YEAR(tgl_lahir) AS umur, 
CASE 
WHEN YEAR(NOW())-YEAR(tgl_lahir) < 17 THEN "muda"
WHEN YEAR(NOW())-YEAR(tgl_lahir) >= 17 AND YEAR(NOW())-YEAR(tgl_lahir) <= 55 THEN "dewasa"
ELSE "tua"
END as kategori_umur
FROM pelanggan;

SELECT id, kode, nama_produk ,
CASE 
WHEN kode = "TV01" THEN "DVD Player"
WHEN kode = "K001" THEN "Rice Cooker"
END as bonus
FROM produk;

-- SOAL 3.4

SELECT tmp_lahir, count(*) as jumlah FROM pelanggan GROUP BY tmp_lahir;

SELECT jenis_produk_id, count(*) as jumlah FROM produk GROUP BY jenis_produk_id;

SELECT * , YEAR(NOW())-YEAR(tgl_lahir) as UMUR FROM pelanggan WHERE YEAR(NOW())-YEAR(tgl_lahir) < (SELECT AVG(YEAR(NOW())-YEAR(tgl_lahir)) FROM pelanggan);

SELECT * FROM produk WHERE harga_beli > (SELECT AVG(harga_beli) FROM produk);

SELECT nama, kartu_id as kartu FROM pelanggan WHERE kartu_id IN (select id from kartu where iuran> 90000);

SELECT * FROM produk WHERE harga_beli < (SELECT AVG(harga_beli) FROM produk);

SELECT nama, kartu_id as kartu FROM pelanggan WHERE kartu_id IN (SELECT id FROM kartu WHERE diskon > 0.03);