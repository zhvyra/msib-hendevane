CREATE database dbpos;

USE dbpos;

create table kartu(
    id int auto_increment primary key,
    kode varchar(6) unique,
    nama varchar(30) not null,
    diskon double,
    iuran double);

create table pelanggan(
    id int auto_increment primary key,
    kode varchar(10) unique,
    nama varchar(45),
    jk char(1),
    tmp_lahir varchar(30),
    tgl_lahir date,
    email varchar(45),
    kartu_id int not null references kartu(id));

create table pesanan(
    id int not null auto_increment primary key,
    tanggal date,
    total double,
    pelanggan_id int not null references pelanggan(id));

create table pembayaran(
    id int not null auto_increment primary key,
    nokuitansi varchar(10) unique,
    tanggal date,
    jumlah double,
    ke int,
    pesanan_id int not null references pesanan(id));

create table jenis_produk(
    id int not null auto_increment primary key,
    nama varchar(45));
    
create table produk(
    id int not null auto_increment primary key,
    kode varchar(10) unique,
    nama varchar(45),
    harga_beli double,
    harga_jual double,
    stok int,
    min_stok int,
    jenis_produk_id int not null references jenis_produk(id));

create table pesanan_items(
    id int not null auto_increment primary key,
    produk_id int not null references produk(id),
    pesanan_id int not null references pesanan(id),
    qty int,
    harga double);

create table vendor(
    id int not null auto_increment primary key,
    nomor varchar(4),
    nama varchar(40),
    kota varchar(30),
    kontak varchar(30));

create table pembelian(
    id int not null auto_increment primary key,
    tanggal varchar(45),
    nomor varchar(40),
    produk_id int not null references produk(id),
    jumlah int(11),
    harga double,
    vendor_id int not null references vendor(id));

ALTER TABLE pelanggan ADD alamat varchar(40);

ALTER TABLE pelanggan CHANGE nama nama_pelanggan varchar(45);

ALTER TABLE pelanggan MODIFY COLUMN nama_pelanggan varchar(50);
