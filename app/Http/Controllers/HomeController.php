<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dataArtikelAll = Articles::orderBy('id','DESC')->limit(3)->get();
        return view('home',compact('dataArtikelAll'));
    }

    public function about() {
        return view('about.index');
    }


    public function sustainabilityReport()
    {
        return view('sustainabilityreport.index');
    }

    public function auditInvestigasi()
    {
        return view('auditInvestigasi.index');
    }

    public function financeAccountingTax()
    {
        return view('financeAccountingTax.index');
    }

    public function digital()
    {
        return view('digital.index');
    }

    public function career() {
        return view('career.index');
    }

    public function solusiBisnisDanKeuangan() {
        return view('solusiBisnisDanKeuangan.index');
    }
    public function layananHukumDanKepatuhan() {
        return view('layananHukumDanKepatuhan.index');
    }
    public function solusiDigitalDanTeknologi() {
        return view('solusiDigitalDanTeknologi.index');
    }
    public function pengelolaanProyekDanRisiko() {
        return view('pengelolaanProyekDanRisiko.index');
    }
    public function layananKeberlanjutanDanCsr() {
        return view('layananKeberlanjutanDanCsr.index');
    }
    public function risetDanAnalisis() {
        return view('risetDanAnalisis.index');
    }
}
