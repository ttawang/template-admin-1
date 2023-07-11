<?php
use Illuminate\Support\Carbon;


function formatAngka($angka) {
    if (strpos($angka, '.') !== false) {
        $formattedAngka = number_format($angka, 2, ',', '.');
    } else {
        $formattedAngka = number_format($angka, 0, ',', '.');
    }
    return $formattedAngka;
}
function rupiah($angka)
{
	if (strlen((string)$angka) > 3) {
		$rupiah = number_format((string)$angka, 0, ',', '.');
	} else {
		$rupiah = $angka;
	}
	return $rupiah;
}
