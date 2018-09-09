<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Accesses\AccessService;
use App\Services\Companies\CompanyService;

class AccessController extends Controller
{
    protected $service;

    public function __construct(AccessService $service)
    {
        $this->service = $service;
    }

    public function browse(Request $request)
    {
        $data = [
            "users" => \App\User::where('roles', '!=', 'admin')->get(),
            "accesses" => $this->service->browse($request),
            "kotas" => \DB::table('kotas')->get()
        ];

        return View('admin.accesses.index', $data);
    }

    public function input(Request $request)
    {
        $data = [
            "users" => \App\User::where('roles', '!=', 'admin')->get(),
            "kotas" => \DB::table('kotas')->get()
        ];
        return View('admin.accesses.add', $data);
    }

    public function add(Request $request)
    {
        if ($this->service->add($request)) {
           return redirect('access')->with('message', 'Berhasil Disimpan');
       }
    }

    public function read(Request $request, $id)
    {
        $data = [
            "access" => $this->service->get($id),
            "users" => \App\User::where('roles', '!=', 'admin')->get(),
            "kotas" => \DB::table('kotas')->get()
        ];
        return View('admin.accesses.edit', $data);
    }

    public function update(Request $request, $id)
    {
        if ($this->service->update($request, $id)) {
           return redirect('access')->with('message', 'Berhasil Disimpan');
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
