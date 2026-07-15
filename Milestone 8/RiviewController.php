<?php

public function index()
{
    $data['review'] = $this->reviewModel->findAll();

    return view('review/index', $data);
}

public function create()
{
    return view('review/create');
}

public function store()
{
    $this->reviewModel->save([
        'nama_jajanan' => $this->request->getPost('nama_jajanan'),
        'kategori' => $this->request->getPost('kategori'),
        'rating' => $this->request->getPost('rating'),
        'review' => $this->request->getPost('review')
    ]);

    return redirect()->to('/review');
}
