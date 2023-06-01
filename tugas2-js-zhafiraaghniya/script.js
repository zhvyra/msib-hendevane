let user = {
  pegawai: "Zhafira",
  jabatan: "manager",
  status: "menikah",
};

const sepuluhPersen = (numb) => {
  return numb * 0.1;
};

const hitungGaji = (user) => {
  let pokok;

  if (user.jabatan == "manager") {
    pokok = 10000000;
  }

  if (user.jabatan == "Asisten manager") {
    pokok = 8000000;
  }

  if (user.jabatan == "Staff") {
    pokok = 5000000;
  }

  let tunjangan = sepuluhPersen(pokok);
  let bpjs = sepuluhPersen(pokok);
  let menikah = user.status == "menikah" ? sepuluhPersen(pokok) : 0;

  let gaji = tunjangan + bpjs + menikah + pokok;

  return gaji;
};

const cetakDataPegawai = (data) => {
  let gaji = hitungGaji(data);

  res = { ...data, gaji };

  console.table(res);
};

cetakDataPegawai(user);

