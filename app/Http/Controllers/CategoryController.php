<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $route;
    protected $view;
    protected $model;

    public function __construct()
    {
        $this->route = 'admin.category.';
        $this->view  = 'category.';
        $this->model = new Category();
    }


    public function index()
    {
        $data['url'] = route($this->route.'create');
        return view($this->view.'index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['url'] = route($this->route.'store');
        return view($this->view.'form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ],[
            'required' => 'nama wajib di isi'
        ]);

        $this->model->create($request->all());
        return redirect()->route($this->route.'index')->with('success', "Berhasil menambah data.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id_decryptted = Crypt::decrypt($id);
        $data['model'] = $this->model->findOrFail($id_decryptted);
        return view($this->view.'detail', $data);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $decrypted_id = Crypt::decrypt($id);
        $data['model'] = $this->model->findOrFail($decrypted_id);
        $data['url']   = route($this->route.'update', $id);
        return view($this->view.'form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $decrypted_id = Crypt::decrypt($id);
        $request->validate([
            'name' => 'required'
        ],[
            'required' => 'nama wajib di isi'
        ]);

        $model = $this->model->findOrFail($decrypted_id);
        $model->update($request->all()); 
        
        return redirect()->route($this->route.'index')->with('success', "Berhasil update data.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $decrypted_id = Crypt::decrypt($id);
        $this->model->findOrFail($decrypted_id)->delete();
        return redirect()->back()->with('success', 'Berhasil hapus data');
    }
}
