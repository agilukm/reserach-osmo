<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Laporans\LaporanService;
use App\Services\Companies\CompanyService;
use App\Services\Pembangkits\PembangkitService;

class LaporanController extends Controller
{
    protected $service;
    protected $company;
    protected $pembangkit;

    public function __construct(LaporanService $service, CompanyService $company, PembangkitService $pembangkit)
    {
        $this->service = $service;
        $this->company = $company;
        $this->pembangkit = $pembangkit;
    }

    public function browse(Request $request)
    {
        $data = [
            "laporans" => $this->service->browse($request),
            "pembangkit_expired" => $this->company->browse($request)
        ];
        return View('admin.laporans.index', $data);
    }

    public function input(Request $request)
    {
        $data = array(
            "companies" => $this->company->browse($request),
        );
        return View('admin.laporans.add', $data);
    }

    public function add(Request $request)
    {
        if ($this->service->add($request)) {
           return redirect('laporan')->with('message', 'Berhasil Disimpan');
       }
    }

    public function read(Request $request, $id)
    {
        $data = [
            "laporan" => $this->service->get($id)
        ];
        return View('admin.laporans.edit', $data);
    }

    public function format(Request $request, $id)
    {
        $data = [
            "pembangkits" => $this->pembangkit->get($id)
        ];
        return View('admin.laporans.format', $data);
    }

    public function modal(Request $request, $id)
    {
        $data = [
            "laporan" => $this->service->get($id)
        ];
        return View('admin.laporans.modal_laporan', $data);
    }

    public function update(Request $request, $id)
    {
        if ($this->service->update($request, $id)) {
           return redirect('laporan')->with('message', 'Berhasil Disimpan');
       }
    }

    public function updateFormat(Request $request, $id)
    {
        if ($this->service->update($request, $id)) {
           return redirect('laporan/format/'.$request->pembangkit_id)->with('message', 'Berhasil Disimpan');
       }
    }

    public function delete($id)
    {
        if ($this->service->delete($id)) {
            return response('success', 200)
                 ->header('Content-Type', 'text/plain');
        };
    }
}
