const getValue = () => {
  let frm = document.getElementById("kalkulator");
  let a1 = Number(frm.angka.value);
  let a2 = Number(frm.angka2.value);
  let err = "Maaf Angka belum terisi";

  return { a1, a2, frm, err };
};

const tambah = () => {
  let { a1, a2, frm, err } = getValue();
  frm.hasil.value = a1 && a2 ? a1 + a2 : err;
};

const kurang = () => {
  let { a1, a2, frm, err } = getValue();
  frm.hasil.value = a1 && a2 ? a1 - a2 : err;
};

const bagi = () => {
  let { a1, a2, frm, err } = getValue();
  frm.hasil.value = a1 && a2 ? a1 / a2 : err;
};

const kali = () => {
  let { a1, a2, frm, err } = getValue();
  frm.hasil.value = a1 && a2 ? a1 * a2 : err;
};

const pangkat = () => {
  let { a1, a2, frm, err } = getValue();
  frm.hasil.value = a1 && a2 ? Math.pow(a1, a2) : err;
};
