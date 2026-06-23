<?php

require_once "Karyawan.php";

class KaryawanKontrak extends Karyawan
{
    protected $durasiKontrakBulan;
    protected $agensiPenyalur;

    public function __construct(
        $id_karyawan,
        $nama_karyawan,
        $departemen,
        $hariKerjaMasuk,
        $gajiDasarPerHari,
        $durasiKontrakBulan,
        $agensiPenyalur
    ) {
        parent::__construct(
            $id_karyawan,
            $nama_karyawan,
            $departemen,
            $hariKerjaMasuk,
            $gajiDasarPerHari
        );

        $this->durasiKontrakBulan = $durasiKontrakBulan;
        $this->agensiPenyalur = $agensiPenyalur;
    }

    public function hitungGajiBersih()
    {
        return $this->hariKerjaMasuk * $this->gajiDasarPerHari;
    }

    public function tampilkanProfilKaryawan()
    {
        echo "ID: {$this->id_karyawan}<br>";
        echo "Nama: {$this->nama_karyawan}<br>";
        echo "Departemen: {$this->departemen}<br>";
        echo "Durasi Kontrak: {$this->durasiKontrakBulan} Bulan<br>";
        echo "Agensi: {$this->agensiPenyalur}<br>";
    }
}
?>