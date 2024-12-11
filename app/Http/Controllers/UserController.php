<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{   
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
    $this->userModel = new UserModel();
    $this->kelasModel = new Kelas();
    }

    public function create()
    {
        return view('create_user',[
            'kelas' => Kelas::all(),
        ]); 
        $kelas = $this->kelas->getKelas();
        $data = [
        'title' => 'Create User',
        'kelas' => $kelas,
        ];
        return view('create_user', $data);

    }
    public function index()
    {
    $data = [
    'title' => 'Create User',
    'users' => $this->userModel->getUser(),
    ];
    return view('list_user', $data);
    }

    // public function store(Request $request) 
    // { 
    //     $data = $request->all(); 
    //     dd($data); 
    // }

    public function store(UserRequest $request) 
    { 
        $validatedData = $request->validate([ 
            'nama' => 'required|string|max:255', 
            'npm' => 'required|string|max:255', 
            'kelas_id' => 'required|exists:kelas,id', 
        ]); 
    
        $user = UserModel::create($validatedData);
        $user->load('kelas');

        return redirect()->to('/user');
    }
}