<?php

namespace App\Controllers;

use App\Models\M_Kategoria;


class Kategoria extends BaseController
{
    protected $kategoria;

    public function __construct()
    {
        $this->kategoria = new M_Kategoria();
    }

    public function index()
    {

        $dptM = new M_Kategoria();
        $builder = $dptM->builder('tbl_kategoria');
    

        $query = $builder->get();
        $data['kategoria'] = $query->getResult();
        return view('kategoria/index', $data);
    }

    public function add()
    {
        return view('kategoria/add');
    }

    public function create()
    {
        return view('kategoria/add');
    }

    public function store()

    {
        $this->kategoria->insertkategoria([

            'id_kategoria' => $this->request->getPost('id_kategoria'),
            'naran_kategoria' => $this->request->getPost('naran_kategoria'),
            'deskrisaun' => $this->request->getPost('deskrisaun'),
        ]);

        return redirect()->to('kategoria')->with('flash', 'Dadus hadia ho susesu!');
    }

    // Parte Edit + Join Tabel
    public function edit($id)
    {
        $model = new M_Kategoria();

        $data['kategoria'] = $model->find($id);

        return view('kategoria/update', $data);
    }

    // Parte Update
    public function update()
    {

        $model = new M_Kategoria();

        $id = $this->request->getPost('id_kategoria');

        $model->update($id, [

            'naran_kategoria' => $this->request->getPost('naran_kategoria'),
            'deskrisaun' => $this->request->getPost('deskrisaun')

        ]);

        return redirect()->to('/kategoria')->with('flash', 'Dadus hadia ho susesu!');
    }

    //Controller Delete//
    public function delete($id)

    {
        $model = new M_Kategoria();
        $model->delete($id);
        return redirect()->to('/kategoria');
    }

    
    // parte nota
    public function note($id_kategoria)
    {
        $kategoriaModel = new M_Kategoria();
        $kategoria = $kategoriaModel->find($id_kategoria);

        if (!$kategoria) {
            return redirect()->to('/kategoria')->with('flash', 'kategoria la hetan!');
        }

        return view('kategoria/note', ['kategoria' => $kategoria]);
    }
}
