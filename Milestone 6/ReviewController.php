<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ReviewModel;

class ReviewController extends ResourceController
{
    protected $modelName = ReviewModel::class;
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $data = $this->model->find($id);

        if (!$data) {
            return $this->failNotFound('Data tidak ditemukan');
        }

        return $this->respond($data);
    }

    public function create()
    {
        $this->model->insert($this->request->getJSON(true));

        return $this->respondCreated([
            'message' => 'Review berhasil ditambahkan'
        ]);
    }

    public function update($id = null)
    {
        $this->model->update($id, $this->request->getJSON(true));

        return $this->respond([
            'message' => 'Review berhasil diubah'
        ]);
    }

    public function delete($id = null)
    {
        $this->model->delete($id);

        return $this->respondDeleted([
            'message' => 'Review berhasil dihapus'
        ]);
    }
}
