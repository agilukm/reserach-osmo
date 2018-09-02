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

    public function browse(Request $request)
    {
        $data = [
            'companies' => $this->service->browse($request)
        ];


        return View('admin.companies.index', $data);
    }

    public function input(Request $request)
    {
        $data = array();
        return View('admin.companies.add', $data);
    }

    public function add(Request $request)
    {
        if ($this->service->add($request)) {
           return redirect('perusahaan')->with('message', 'Berhasil Disimpan');
       }
    }

    public function read(Request $request, $id)
    {
        $data = [
            "company" => $this->service->get($id)
        ];
        return View('admin.companies.edit', $data);
    }

    public function update(Request $request, $id)
    {
        if ($this->service->update($request, $id)) {
           return redirect('perusahaan')->with('message', 'Berhasil Disimpan');
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
