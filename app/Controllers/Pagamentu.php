<?php

namespace App\Controllers;

use App\Models\M_Pagamentu;
use App\Models\M_Costumer;



class Pagamentu extends BaseController
{
    protected $pagamentu;

    public function __construct()
    {
        $this->pagamentu = new M_Pagamentu();
    }

    public function index()

    {

        $dptD = new M_Pagamentu();
        $builder = $dptD->builder('tbl_pagamentu as pa');
        $builder->join('tbl_costumer as co', 'co.id_costumer = pa.id_costumer');
        $builder->select('pa.id_pagamentu,co.naran,pa.osan,pa.data_pagamentu,pa.estatutu,pa.data_atualiza');


        $query = $builder->get();
        $data['pagamentu'] = $query->getResult();
        return view('pagamentu/index', $data);
    }

    public function add()
    {
        return view('pagamentu/add');
    }

    public function create()
    {
        $model = new M_Costumer();
        $data['costumer'] = $model->findAll();
        return view('pagamentu/add', $data);
    }

    public function store()

    {
        $this->pagamentu->insertPagamentu([

            'id_pagamentu' => $this->request->getPost('id_pagamentu'),
            'id_costumer' => $this->request->getPost('id_costumer'),
            'osan' => $this->request->getPost('osan'),
            'data_pagamentu' => $this->request->getPost('data_pagamentu'),
            'estatutu' => $this->request->getPost('estatutu'),
            'data_atualiza' => $this->request->getPost('data_atualiza'),
        ]);
        return redirect()->to('pagamentu')->with('flash', 'Dadus hadia ho susesu!');
    }


    // Parte Edit + Join Tabel
    public function edit($id)
    {
        $model = new M_Pagamentu();
        $model2 = new M_Costumer();

        $data['pagamentu'] = $model->find($id);
        $data['costumer'] = $model2->findAll(); // Ambil data fakultas

        return view('pagamentu/update', $data);
    }

    // Parte Update
    public function update()
    {
        $model = new M_Pagamentu();

        $id = $this->request->getPost('id_pagamentu');

        $model->update($id, [

            'id_pagamentu' => $this->request->getPost('id_pagamentu'),
            'id_costumer' => $this->request->getPost('id_costumer'),
            'osan' => $this->request->getPost('osan'),
            'data_pagamentu' => $this->request->getPost('data_pagamentu'),
            'estatutu' => $this->request->getPost('estatutu'),
            'data_atualiza' => $this->request->getPost('data_atualiza'),
        ]);

        return redirect()->to('/pagamentu')->with('flash', 'Dadus hadia ho susesu!');
    }
    //Parte Delete
    public function delete($id)
    {
        $model = new M_Pagamentu();

        // Fetch data to confirm it exists
        $data = $model->select('pa.id_pagamentu,co.naran,pa.osan,pa.data_pagamentu,pa.estatutu,pa.data_atualiza')
            ->from('tbl_pagamentu as pa')
            ->join('tbl_costumer as co', 'co.id_costumer = pa.id_costumer')
            ->where('pa.id_pagamentu', $id)
            ->first();

        if ($data) {
            // Delete the record
            $model->delete($id);
            return redirect()->to('/pagamentu');
        }
    }

// parte nota
    public function note($id_pagamentu)
    {
        $pagamentuModel = new M_Pagamentu();
        $pagamentu = $pagamentuModel->select('pa.id_pagamentu,co.naran,pa.osan,pa.data_pagamentu,pa.estatutu,pa.data_atualiza')
            ->from('tbl_pagamentu as pa')
            ->join('tbl_costumer as co', 'co.id_costumer = pa.id_costumer')
            ->where('pa.id_pagamentu', $id_pagamentu)
            ->first();

        if (!$pagamentu) {
            return redirect()->to('/pagamentu')->with('flash', 'pagamentu la hetan!');
        }

        return view('pagamentu/note', ['pagamentu' => $pagamentu]);
    }



    public function print()
    {
        $builder = $this->pagamentu->builder('tbl_pagamentu as pa');
        $builder->join('tbl_costumer as co', 'co.id_costumer = pa.id_costumer');
        $builder->select('pa.id_pagamentu,co.naran,pa.osan,pa.data_pagamentu,pa.estatutu,pa.data_atualiza');
        $query = $builder->get();
        $data['pagamentu'] = $query->getResult();

        // Pass the data to the print view
        return view('pagamentu/print', $data);
    }
}
