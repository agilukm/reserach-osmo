<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Skttks\SkttkService;
use App\Services\Companies\CompanyService;

class SkttkController extends Controller
{
    protected $service;
    protected $company;

    public function __construct(SkttkService $service, CompanyService $company)
    {
        $this->service = $service;
        $this->company = $company;
    }

    public function browse(Request $request)
    {
        $data = [
            "skttks" => $this->service->browse($request),
            "companies" => $this->company->browse($request)
        ];

        return View('admin.skttks.index', $data);
    }

    public function input(Request $request)
    {
        $data = array(
            "companies" => $this->company->browse($request)
        );
        return View('admin.skttks.add', $data);
    }

    public function add(Request $request)
    {
        if ($this->service->add($request)) {
           return redirect('skttk')->with('message', 'Berhasil Disimpan');
       }
    }

    public function read(Request $request, $id)
    {
        $data = [
            "skttk" => $this->service->get($id),
            "companies" => $this->company->browse($request)
        ];
        return View('admin.skttks.edit', $data);
    }

    public function update(Request $request, $id)
    {
        if ($this->service->update($request, $id)) {
           return redirect('skttk')->with('message', 'Berhasil Disimpan');
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
