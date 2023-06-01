-- SOAL 2.1

SELECT * FROM produk ORDER BY harga_jual DESC;

SELECT kode, nama, tmp_lahir FROM pelanggan;

SELECT kode, nama_produk, stok FROM produk WHERE stok=4;

SELECT * FROM pelanggan WHERE tmp_lahir='Jakarta';

SELECT kode, nama, tmp_lahir, tgl_lahir FROM pelanggan ORDER BY tgl_lahir DESC;

-- SOAL 2.2

SELECT * FROM produk WHERE stok=3 OR stok=10;

SELECT * FROM produk WHERE harga_jual<5000000 AND harga_jual>500000;

SELECT * FROM produk WHERE min_stok > stok;

SELECT * FROM pelanggan ORDER BY tgl_lahir DESC;

SELECT * FROM pelanggan WHERE tmp_lahir='Jakarta' AND jk='perempuan';

SELECT * FROM pelanggan WHERE id IN (2,4,6);

SELECT * FROM produk WHERE harga_jual>=500000 AND harga_jual<=6000000;

-- SOAL 2.3 

SELECT * FROM produk WHERE kode LIKE 'K%' OR kode LIKE 'M%';

SELECT * FROM produk WHERE kode NOT LIKE 'M%';

SELECT * FROM produk WHERE kode LIKE 'TV%';

SELECT * FROM pelanggan WHERE nama LIKE '%SA%';

SELECT * FROM pelanggan WHERE tmp_lahir NOT IN ('JAKARTA') AND nama LIKE '%YO%';

SELECT * FROM pelanggan WHERE nama LIKE '_a%';

-- SOAL 2.4

SELECT * FROM produk ORDER BY harga_beli DESC LIMIT 2;

SELECT * FROM produk ORDER BY harga_beli ASC LIMIT 1;

SELECT * FROM produk ORDER BY stok DESC LIMIT 1;

SELECT * FROM produk ORDER BY stok ASC LIMIT 2;

SELECT * FROM pelanggan ORDER BY tgl_lahir DESC LIMIT 1;

SELECT * FROM pelanggan ORDER BY tgl_lahir ASC LIMIT 1;


