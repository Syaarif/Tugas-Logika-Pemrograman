<?php
$kondisiayam = "lapar";
$jenisayam = "petelur";
$waktu = "pagi";

/* kondisi positif */
if ($kondisiayam == "lapar") {
    echo "Ayam akan mencari makan <br>";
}

/* kondisi negatif */
if ($kondisiayam == "tidak lapar") {
    echo "Ayam tidak akan mencari makan <br>";
}

/* dua kondisi */
if ($kondisiayam == "lapar") {
    echo "Ayam akan makan <br>";
} elseif ($kondisiayam == "kenyang") {
    echo "Ayam akan beristirahat <br>";
}

/* lebih dari dua kondisi */
if ($kondisiayam == "lapar") {
    echo "Ayam akan makan <br>";
} elseif ($kondisiayam == "haus") {
    echo "Ayam akan mencari minum <br>";
} elseif ($kondisiayam == "ngantuk") {
    echo "Ayam akan tidur <br>";
} elseif ($kondisiayam == "ketakutan") {
    echo "Ayam akan berlari menjauh <br>";
} elseif ($kondisiayam == "sakit") {
    echo "Ayam perlu dirawat <br>";
} else {
    echo "Ayam perlu diperiksa <br>";
}

/* nested if */
if ($jenisayam == "petelur") {
    if ($kondisiayam == "sehat") {
        echo "Ayam akan menghasilkan telur <br>";
    } elseif ($kondisiayam == "sakit") {
        echo "Ayam tidak akan menghasilkan telur <br>";
    }
}
if ($jenisayam == "pedaging") {
    if ($kondisiayam == "sehat") {
        echo "Ayam dapat tumbuh dengan baik <br>";
    } elseif ($kondisiayam == "sakit") {
        echo "Ayam perlu dirawat <br>";
    }
}

/* kondisi DAN */
if ($waktu == "pagi" && $kondisiayam == "lapar") {
    echo "Ayam diberi makan <br>";
}
if ($waktu == "malam" && $kondisiayam == "kenyang") {
    echo "Ayam dimasukkan kandang <br>";
}

/* kondisi ATAU */
if ($kondisiayam == "makan" || $kondisiayam == "minum" || $kondisiayam == "berjalan") {
    echo "Ayam perlu dirawat oleh pemiliknya";
} else {
    echo "Kondisi ayam perlu dipantau oleh pemiliknya";
}
