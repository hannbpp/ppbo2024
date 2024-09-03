<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}


$lingkaran = new Lingkaran(5);
echo "Luas Lingkaran dengan jari-jari 5: " . $lingkaran->luas() . "\n";
echo "Keliling Lingkaran dengan jari-jari 5: " . $lingkaran->keliling() . "\n";

$bola = new Bola(5);
echo "Volume Bola dengan jari-jari 5: " . $bola->volume() . "\n";

$tabung = new Tabung(5, 10);
echo "Volume Tabung dengan jari-jari 5 dan tinggi 10: " . $tabung->volume() . "\n";

$kerucut = new Kerucut(5, 10);
echo "Volume Kerucut dengan jari-jari 5 dan tinggi 10: " . $kerucut->volume() . "\n";

$nasi_tumpeng = new Kerucut(4, 10);
echo "Volume Nasi Tumpeng dengan jari-jari 4 cm dan tinggi 10 cm: " . $nasi_tumpeng->volume() . "\n";
?>
