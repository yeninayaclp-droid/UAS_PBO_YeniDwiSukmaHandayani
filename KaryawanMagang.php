<?php

require_once "Karyawan.php";

class KaryawanMagang extends Karyawan
{
    protected $uangSakuBulanan;
    protected $sertifikatKampusMerdeka;

    public function __construct(
        $id_karyawan,
        $nama_karyawan,
        $departemen,
        $hariKerjaMasuk,
        $gajiDasarPerHari,
        $uangSakuBulanan,
        $sertifikatKampusMerdeka
    ) {
        parent::__construct(
            $id_karyawan,
            $nama_karyawan,
            $departemen,
            $hariKerjaMasuk,
            $gajiDasarPerHari
        );

        $this->uangSakuBulanan = $uangSakuBulanan;
        $this->sertifikatKampusMerdeka = $sertifikatKampusMerdeka;
    }

    public function hitungGajiBersih()
    {
        return ($this->hariKerjaMasuk * $this->gajiDasarPerHari)
           * 0.80;
    }

    public function tampilkanProfilKaryawan()
    {
        echo "ID: {$this->id_karyawan}<br>";
        echo "Nama: {$this->nama_karyawan}<br>";
        echo "Departemen: {$this->departemen}<br>";
        echo "Uang Saku: Rp {$this->uangSakuBulanan}<br>";
        echo "Sertifikat KM: {$this->sertifikatKampusMerdeka}<br>";
    }
}
?>