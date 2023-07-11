<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Support\Facades\Storage;

class MutasiExport implements FromView,ShouldAutoSize
{
	private $data;
    private $stok;
    private $jenis_kain;
    private $tanggal_awal;
    private $jenis;

	public function __construct($data, $stok, $jenis_kain, $tanggal_awal, $jenis){
        $this->data = $data;
        $this->stok = $stok;
        $this->jenis_kain = $jenis_kain;
        $this->tanggal_awal = $tanggal_awal;
        $this->jenis = $jenis;
    }

    public function view(): View{
        return view('page.inventory.mutasi.excel', [
            'data' => $this->data,
            'stok' => $this->stok,
            'jenis_kain' => $this->jenis_kain,
            'tanggal_awal' => $this->tanggal_awal,
            'jenis' => $this->jenis
        ]);
    }
}
