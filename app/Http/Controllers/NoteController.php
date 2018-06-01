<?php
/**
 * Created by PhpStorm.
 * User: paoloaquino
 * Date: 6/1/18
 * Time: 1:52 PM
 */

namespace App\Http\Controllers;

use App\Repositories\NoteRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class NoteController
{
    protected $validation_rules = [
        'title' => 'required|max:50',
        'note' => 'nullable|max:1000'
    ];
    public function __construct(NoteRepository $noteRepository)
    {
        $this->model = $noteRepository;
    }


    public function list(Request $request)
    {
        return ['payload' => $this->model->list($request)];
    }

    public function create(Request $request)
    {
        $this->validateRequest($request);
        return ['payload' => $this->model->create($request)];
    }

    public function update(int $id, Request $request)
    {
        $this->validateRequest($request);
        return ['payload' => $this->model->update($id , $request)];
    }

    public function delete($id , Request $request)
    {
        return ['payload' => $this->model->delete($id , $request)];

    }

    public function get($id , Request $request)
    {
        return ['payload' => $this->model->get($id , $request)];

    }

    protected function validateRequest(Request $request)
    {
        $validator = Validator::make($request->all() , $this->validation_rules);

        if($validator->fails())
        {
            $errors = $validator->errors();
            $error = $errors->first();
            throw new \Exception($error, 422);
        }
    }
}
