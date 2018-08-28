<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Pembangkits\PembangkitService;
use App\Services\Companies\CompanyService;

class PembangkitController extends Controller
{
    protected $service;
    protected $company;

    public function __construct(PembangkitService $service, CompanyService $company)
    {
        $this->service = $service;
        $this->company = $company;
    }

    public function browse(Request $request)
    {
        $data = [
            "pembangkits" => $this->service->browse($request)
        ];
        return View('admin.pembangkits.index', $data);
    }

    public function input(Request $request)
    {
        $data = array(
            "companies" => $this->company->browse($request)
        );
        return View('admin.pembangkits.add', $data);
    }

    public function add(Request $request)
    {
        if ($this->service->add($request)) {
           return redirect('pembangkit')->with('message', 'Berhasil Disimpan');
       }
    }

    public function read(Request $request, $id)
    {
        $data = [
            "pembangkits" => $this->service->get($id),
            "company" => $this->company->browse($request)
        ];
        return View('admin.pembangkits.edit', $data);
    }

    public function update(Request $request)
    {
        if ($this->service->update($request)) {
           return redirect('pembangkit')->with('message', 'Berhasil Disimpan');
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
