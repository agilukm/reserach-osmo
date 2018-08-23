<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Companies\CompanyService;

class CompanyController extends Controller
{
    protected $service;

    public function __construct(CompanyService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $data = $this->service->browse($request);

        return View('admin.companies.index', $data);
    }

    public function input(Request $request)
    {
        $data = array();
        return View('admin.companies.add', $data);
    }

    public function add(Request $request)
    {
        if ($this->payment->add($request)) {
           return redirect('admin/pembayaran')->with('message', 'Berhasil Disimpan');
       }
    }

    public function edit(Request $request, $id)
    {
        $data = [
            "company" => $this->service->get()
        ];
        return View('admin.company.edit', $data);
    }

    public function update(Request $request)
    {
        if ($this->payment->update($request)) {
           return redirect('admin/pembayaran')->with('message', 'Berhasil Disimpan');
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
