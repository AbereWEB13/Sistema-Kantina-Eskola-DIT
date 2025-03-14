<?php

namespace App\Controllers;

use App\Models\M_Order;
use App\Models\M_Costumer;
use App\Models\M_Produtu;

class Order extends BaseController
{

    protected $order;

    public function __construct()
    {
        $this->order = new M_Order();
    }


    public function index()
    {

        $dptM = new M_Order();
        $builder = $dptM->builder('tbl_order as or');
        $builder->join('tbl_costumer as co',  'co.id_costumer = or.id_costumer');
        $builder->join('tbl_produtu as pr',  'pr.id_produtu = or.id_produtu');
        $builder->select('or.id_order,co.naran,pr.naran_produtu,or.presu,or.kuantidade,or.total_presu');
        $query = $builder->get();
        $data['order'] = $query->getResult();
        return view('order/index', $data);
    }

    // Parte Create
    public function create()
    {
        $model = new M_Costumer();
        $model2 = new M_Produtu();
        $data['costumer'] = $model->findAll();
        $data['produtu'] = $model2->findAll();
        return view('order/add', $data);
    }

    public function store()

    {
        $this->order->insertOrder([

            'id_order' => $this->request->getPost('id_order'),
            'id_costumer' => $this->request->getPost('id_costumer'),
            'id_produtu' => $this->request->getPost('id_produtu'),
            'presu' => $this->request->getPost('presu'),
            'kuantidade' => $this->request->getPost('kuantidade'),
            'total_presu' => $this->request->getPost('total_presu'),
        ]);
        return redirect()->to('order')->with('flash', 'Dadus hadia ho susesu!');
    }

    // Parte Edit + Join Tabe l
    public function edit($id)
    {
        $model = new M_Order();
        $model2 = new M_Costumer();
        $model3 = new M_Produtu();
        $data['order'] = $model->find($id);
        $data['costumer'] = $model2->findAll();
        $data['produtu'] = $model3->findAll(); // Ambil data fakultas

        return view('order/update', $data);
    }

    // Parte Update
    public function update()
    {
        $model = new M_Order();

        $id = $this->request->getPost('id_order');

        $model->update($id, [

            'id_order' => $this->request->getPost('id_order'),
            'id_costumer' => $this->request->getPost('id_costumer'),
            'id_produtu' => $this->request->getPost('id_produtu'),
            'presu' => $this->request->getPost('presu'),
            'kuantidade' => $this->request->getPost('kuantidade'),
            'total_presu' => $this->request->getPost('total_presu')
        ]);

        return redirect()->to('/order')->with('flash', 'Dadus hadia ho susesu!');
    }


    //Parte Delete//
    public function delete($id)
    {
        $model = new M_Order();

        // Fetch data to confirm it exists
        $data = $model->select('or.id_order,co.naran,pr.naran_produtu,or.presu,or.kuantidade,or.total_presu')
            ->from('tbl_order as or')
            ->join('tbl_costumer as co',  'co.id_costumer = or.id_costumer')
            ->join('tbl_produtu as pr',  'pr.id_produtu = or.id_produtu')
            ->where('or.id_order', $id)
            ->first();

        if ($data) {
            // Delete the record
            $model->delete($id);
            return redirect()->to('/order');
        }
    }

    // Parte Nota
    public function note($id_order)
    {
        $orderModel = new M_Order();
        $order = $orderModel->select('or.id_order,co.naran,pr.naran_produtu,or.presu,or.kuantidade,or.total_presu')
            ->from('tbl_order as or')
            ->join('tbl_costumer as co', 'co.id_costumer = or.id_costumer')
            ->join('tbl_produtu as pr', 'pr.id_produtu = or.id_produtu')
            ->where('or.id_order', $id_order)
            ->first();

        if (!$order) {
            return redirect()->to('/order')->with('flash', 'Order la hetan!');
        }

        return view('order/note', ['order' => $order]);
    }
}
