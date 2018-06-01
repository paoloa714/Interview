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
        return $this->model->list($request);
    }

    public function create(Request $request)
    {
        return $this->model->create($request);

    }

    public function update(Request $request)
    {
        return $this->model->update($request);

    }

    public function delete(Request $request)
    {
        return $this->model->delete($request);

    }

    public function get(Request $request)
    {
        return $this->model->get($request);

    }
}
