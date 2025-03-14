<?php

namespace App\Controllers;

use App\Models\M_Fatin;



class Fatin extends BaseController
{
    protected $fatin;

    public function __construct()
    {
        $this->fatin = new M_Fatin();
    }

    public function index()

    {

        $dptD = new M_Fatin();
        $builder = $dptD->builder('tbl_fatin');
        $query = $builder->get();
        $data['fatin'] = $query->getResult();
        return view('fatin/index', $data);
    }

    public function add()
    {
        return view('fatin/add');
    }

    public function create()
    {
        return view('fatin/add');
    }

    public function store()

    {

        $file = $this->request->getFile('image');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName(); // Kria naran random
            $file->move('uploads', $newName); // Rai iha pasta uploads
        } else {
            $newName = null; // Se la upload imajen
        } {


            $this->fatin->insertFatin([

                'id_fatin' => $this->request->getPost('id_fatin'),
                'kode_fatin' => $this->request->getPost('kode_fatin'),
                'naran_fatin' => $this->request->getPost('naran_fatin'),
                'oras_loke' => $this->request->getPost('oras_loke'),
                'oras_taka' => $this->request->getPost('oras_taka'),
                'image' => $newName,
            ]);
            return redirect()->to('fatin')->with('flash', 'Dadus hadia ho susesu!');
        }
    }


    // Parte Edit + Join Tabel
    public function edit($id)
    {
        $model = new M_Fatin();
        $data['fatin'] = $model->find($id);
        return view('fatin/update', $data);
    }

    // Parte Update
    public function update()
    {

        $model = new M_Fatin();
        $id = $this->request->getPost('id_fatin');
        $file = $this->request->getFile('image');
        $oldImage = $this->request->getPost('old_image');
        $imageName = $oldImage;

        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads', $imageName);

            if ($oldImage && file_exists('uploads/' . $oldImage)) {
                unlink('uploads/' . $oldImage);
            }
        }
        $model->update($id, [


            'kode_fatin' => $this->request->getPost('kode_fatin'),
            'naran_fatin' => $this->request->getPost('naran_fatin'),
            'oras_loke' => $this->request->getPost('oras_loke'),
            'oras_taka' => $this->request->getPost('oras_taka'),
            'image' => $imageName // Rai naran imajen iha database

        ]);

        return redirect()->to('/fatin')->with('flash', 'Dadus hadia ho susesu!');
    }
    //Parte Delete//

    public function delete($id)

    {
        $model = new M_Fatin();
        $model->delete($id);
        return redirect()->to('/fatin');
    }

      // parte nota

      public function note($id_fatin)
      {
          $fatinModel = new M_Fatin();
          $fatin = $fatinModel->find($id_fatin);
  
          if (!$fatin) {
              return redirect()->to('/fatin')->with('flash', 'fatin la hetan!');
          }
  
          return view('fatin/note', ['fatin' => $fatin]);
      }
}
