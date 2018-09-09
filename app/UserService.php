<?php

namespace App;

use QueryBuilder;
use Storage;
use Auth;
use Illuminate\Support\Facades\Hash;
class UserService
{

    private $user;
    private $queryBuilder;

    function __construct(User $user)
    {
        $this->user = $user;
    }

    public function browse($input)
    {
        $query = new QueryBuilder($this->user, $input);
        return $query->build()->get();
    }

    public function read($id)
    {
        return $this->user->findOrFail($id);
    }

    public function me()
    {
        return $this->user->findOrFail(Auth::user()->id);
    }

    public function simpanme($input)
    {
        $user = $this->me();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->address = $input['address'];
        $user->phone = $input['phone'];
        $user->save();
        return $user;
    }

    public function edit($input, $id)
    {
        $user = $this->user->findOrFail($id);
        $data = $this->fillUser($input);
        $user->fill($data->toArray());
        $user->save();
        return $user;
    }

    public function add($input)
    {
        $data = $this->fillUser($input);
        $this->user->fill($data->toArray());
        $this->user->save();
        return $this->user;
    }

    public function delete($id)
    {
        return $this->user->destroy($id);
    }

    public function fillUser($data)
    {
        $this->user->roles = 'user';
        $this->user->name = $data['name'];
        $this->user->email = $data['email'];
        $this->user->password = Hash::make($data['password']);        
        return $this->user;
    }

}
