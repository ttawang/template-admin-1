<?php

namespace App\Exports;

use App\Models\master\Warna;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ViewExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    private $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function view(): View
    {
        if ($this->data['page'] == 'stok_barang') {
            return view('page.inventory.stok.excel-barang', $this->data);
        } else if ($this->data['page'] == 'stok_aksesoris') {
            return view('page.inventory.stok.excel-aksesoris', $this->data);
        } else if ($this->data['page'] == 'stok_barang_wip') {
            return view('page.inventory.stok.excel-wip2', $this->data);
        } else if ($this->data['page'] == 'no_roll') {
            return view('page.inventory.no_roll.cetak', $this->data);
        } else if ($this->data['page'] == 'barang') {
            return view('page.master.barang.cetak', $this->data);
        } else if ($this->data['page'] == 'customer') {
            return view('page.master.customer.cetak', $this->data);
        } else if ($this->data['page'] == 'motif') {
            return view('page.master.motif.cetak', $this->data);
        } else if ($this->data['page'] == 'vendor') {
            return view('page.master.vendor.cetak', $this->data);
        } else if ($this->data['page'] == 'warna') {
            return view('page.master.warna.cetak', $this->data);
        } else if ($this->data['page'] == 'stok_opname_kain') {
            return view('page.inventory.stok_opname.kain-excel', $this->data);
        } else if ($this->data['page'] == 'stok_opname_aksesoris') {
            return view('page.inventory.stok_opname.aksesoris-excel', $this->data);
        } else if ($this->data['page'] == 'mutasi_barang_detail') {
            return view('page.inventory.mutasi_proses.detail_excel', $this->data);
        } else if ($this->data['page'] == 'mutasi_barang_rekap') {
            return view('page.inventory.mutasi_proses.rekap_excel', $this->data);
        } else if ($this->data['page'] == 'mutasi_barang_wip') {
            return view('page.inventory.mutasi_proses.wip_excel', $this->data);
        } else if ($this->data['page'] == 'mutasi_aksesoris_rekap') {
            return view('page.inventory.mutasi_aksesoris.rekap_excel', $this->data);
        }
    }
}
