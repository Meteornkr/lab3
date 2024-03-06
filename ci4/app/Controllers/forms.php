<?php

namespace App\Controllers;

use App\Models\GuestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class forms extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

        $data = [
            'guests'  => $model->getGuest(),
            'title' => 'Comments archive',
        ];

        return view('templates/header', $data)
            . view('forms/index')
    ;
    }
    public function show($slug = null)
    {
        $model = model(GuestModel::class);

        $data['forms'] = $model->getGuest($slug);

        if (empty($data['forms'])) {
            throw new PageNotFoundException('Cannot find the comment: ' . $slug);
        }

        $data['name'] = $data['forms']['name'];

        return view('templates/header', $data)
            . view('forms/view')
            . view('templates/footer');
    }

    public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Create a comment'])
            . view('forms/create')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['name', 'body']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'name' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(GuestModel::class);

        $model->save([
            'name' => $post['name'],
            'slug'  => url_title($post['name'], '-', true),
            'body'  => $post['body'],
        ]);

        return view('templates/header', ['name' => 'Post a Comment'])
            . view('forms/success')
            . view('templates/footer');
    }
}