DELIMITER 
$$
CREATE TRIGGER pesanan_insert_before BEFORE INSERT ON pesanan_items
FOR EACH ROW
BEGIN

SET @total = (SELECT total FROM pesanan WHERE id = NEW.pesanan_id);
SET @jumlah = (NEW.qty * NEW.harga) + @total;
UPDATE pesanan SET total = @jumlah WHERE id = NEW.pesanan_id;

SET @stok = (SELECT stok FROM produk WHERE id = NEW.produk_id);
SET @sisa = @stok - NEW.qty;

IF @sisa < 0 THEN
SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'WARNING : STOK TIDAK CUKUP';
END IF;

UPDATE produk SET stok = @sisa WHERE id = NEW.produk_id;

END
$$

INSERT INTO pesanan_items VALUES ('',1,3,1,3500);

DELIMITER
$$
CREATE TRIGGER pembayaran_insert_before BEFORE INSERT ON pembayaran
FOR EACH ROW
BEGIN

SET NEW.jumlah = (SELECT total FROM pesanan WHERE id = NEW.pesanan_id);

END
$$

INSERT INTO pembayaran VALUES ('','KW01','2023-01-01',0,'LUNAS',3);