<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\VisimisiModel;
use App\Models\AdminModel;

class VisimisiController extends BaseController
{
    protected $userModel;
    
    public function __construct()
    {
        // Cek apakah user sudah login
        if (!session()->get('isLoggedIn')) {
            redirect()->to('/login')->send(); // Gunakan cara bawaan CI4
        }
    } 
    public function index()
    {
        $model = new VisimisiModel();
        $data['visimisi'] = $model->findAll();
        return view('admin/visimisi/index', $data);
    }

    public function add()
    {
        return view('admin/visimisi/add');
    }

    public function store()
    {
        $model = new VisimisiModel();
        $model->save([
            'visi' => $this->request->getPost('visi'),
            'misi' => $this->request->getPost('misi')
        ]);
        return redirect()->to(base_url('admin/visimisi'));
    }

    public function edit($id)
    {
        $model = new VisimisiModel();
        $data['visimisi'] = $model->find($id);
        return view('admin/visimisi/edit', $data);
    }

    public function update($id)
    {
        $model = new VisimisiModel();
        $model->update($id, [
            'visi' => $this->request->getPost('visi'),
            'misi' => $this->request->getPost('misi')
        ]);
        return redirect()->to(base_url('admin/visimisi'));
    }

    public function delete($id)
    {
        $model = new VisimisiModel();
        $model->delete($id);
        return redirect()->to(base_url('admin/visimisi'));
    }
}
