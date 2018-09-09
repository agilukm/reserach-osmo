<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\UserService;
use View;
use Auth;
use Redirect;
use Carbon;
use Session;
use Mail;
use Response;

class UserController extends Controller
{
    protected $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
        $this->middleware('auth');
    }

    public function browse(Request $request)
    {
        $data = array(
            'data' => $this->service->browse($request)
        );
        return View('admin.users.index', $data);
    }

    public function add(Request $request)
    {
        return View('admin.users.add');
    }

    public function simpan(Request $request)
    {
        $this->service->add($request);
        return redirect('user')->with('message', 'Berhasil Disimpan');
    }

    public function edit(Request $request, $id)
    {
        $this->service->edit($request, $id);
        return redirect('user')->with('message', 'Berhasil Disimpan');
    }

    public function read(Request $request, $id)
    {
        $data = array(
            'data' => $this->service->read($id)
        );
        return View('admin.users.read', $data);
    }

    public function delete($id)
    {
        $this->service->delete($id);
        return response('success', 200)
                 ->header('Content-Type', 'text/plain');
    }

    public function me()
    {
        $data = array(
            'me' => \App\User::where('id', Auth::user()->id), );
        return View('admin.users.me',$data);
    }

    public function simpanme(Request $request)
    {
        $this->service->simpanme($request);
        return redirect('user/me')->with('message', 'Berhasil Disimpan');
    }
}
