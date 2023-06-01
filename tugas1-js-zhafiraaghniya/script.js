const hitungLuasPersegi = (panjang, lebar) => {
  return panjang * lebar;
};

const hitungKelilingPersegi = (panjang, lebar) => {
  return 2 * panjang + 2 * lebar;
};

const hitungLuasJajarGenjang = (alas, tinggi) => {
  return alas * tinggi;
};

const hitungKelilingJajarGenjang = (panjang, lebar) => {
  return 2 * panjang + 2 * lebar;
};

const hitungLuasSegitiga = (alas, tinggi) => {
  return (alas * tinggi) / 2;
};

const hitungKelilingSegitiga = (sisi) => {
  return sisi * 3;
};

const panjangPersegi = prompt("Masukan Panjang Persegi :");
const lebarPersegi = prompt("Masukan Lebar Persegi :");

console.log("Luas Persegi : ", hitungLuasPersegi(panjangPersegi, lebarPersegi));
console.log(
  "Keliling Persegi : ",
  hitungKelilingPersegi(panjangPersegi, lebarPersegi)
);

const alasJajarGenjang = prompt("Masukan Alas Jajar Genjang :");
const tinggiJajarGenjang = prompt("Masukan Tinggi Jajar Genjang :");

console.log(
  "Luas Jajar Genjang : ",
  hitungLuasJajarGenjang(alasJajarGenjang, tinggiJajarGenjang)
);

const panjangJajarGenjang = prompt("Masukan Panjang Jajar Genjang");
const lebarJajarGenjang = prompt("Masukan Lebar Jajar Genjang");

console.log(
  "Keliling Jajar Genjang : ",
  hitungKelilingJajarGenjang(panjangJajarGenjang, lebarJajarGenjang)
);

const alasSegitiga = prompt("Masukan Alas Segitiga : ");
const tinggiSegitiga = prompt("Masukan Tinggi Segitiga : ");

console.log(
  "Luas Segitiga : ",
  hitungLuasSegitiga(alasSegitiga, tinggiSegitiga)
);

const sisiSegitiga = prompt("Masukan Sisi Segitiga :");

console.log("Keliling Segitga : ", hitungKelilingSegitiga(sisiSegitiga));
