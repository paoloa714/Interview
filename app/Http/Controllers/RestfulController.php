<?php
/**
 * Created by PhpStorm.
 * User: paoloaquino
 * Date: 6/1/18
 * Time: 1:52 PM
 */

namespace App\Http\Controllers;

use App\Interfaces\RepositoryInterface;
use Illuminate\Http\Request;

abstract class RestfulController extends Controller
{
    /**
     * @var RepositoryInterface
     */
    protected $model;


    public function list(Request $request)
    {
        return ['payload' => $this->model->list($request)];
    }

    public function create(Request $request)
    {
        return ['payload' => $this->model->create($request)];

    }

    public function update($id, Request $request)
    {
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
}
