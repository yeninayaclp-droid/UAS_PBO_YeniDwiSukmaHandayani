<?php

require_once "Karyawan.php";

class KaryawanTetap extends Karyawan
{
    protected $tunjanganKesehatan;
    protected $opsiSahamId;

    public function __construct(
        $id_karyawan,
        $nama_karyawan,
        $departemen,
        $hariKerjaMasuk,
        $gajiDasarPerHari,
        $tunjanganKesehatan,
        $opsiSahamId
    ) {
        parent::__construct(
            $id_karyawan,
            $nama_karyawan,
            $departemen,
            $hariKerjaMasuk,
            $gajiDasarPerHari
        );

        $this->tunjanganKesehatan = $tunjanganKesehatan;
        $this->opsiSahamId = $opsiSahamId;
    }

    public function hitungGajiBersih()
    {
        return ($this->hariKerjaMasuk * $this->gajiDasarPerHari)
           + $this->tunjanganKesehatan;
    }

    public function tampilkanProfilKaryawan()
    {
        echo "ID: {$this->id_karyawan}<br>";
        echo "Nama: {$this->nama_karyawan}<br>";
        echo "Departemen: {$this->departemen}<br>";
        echo "Tunjangan: Rp {$this->tunjanganKesehatan}<br>";
        echo "Opsi Saham: {$this->opsiSahamId}<br>";
    }
}
?>