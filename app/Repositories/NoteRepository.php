<?php
/**
 * Created by PhpStorm.
 * User: paoloaquino
 * Date: 6/1/18
 * Time: 2:28 PM
 */

namespace App\Repositories;


use App\Interfaces\RepositoryInterface;
use App\Note;
use Illuminate\Http\Request;

class NoteRepository implements RepositoryInterface
{
    public function get(Request $request)
    {
    }

    public function list(Request $request)
    {
        return [
            'HELLO WORLD' => 'DOUBLE HELLO'
        ];
    }

    public function create(Request $request)
    {

    }

    public function update(Request $request)
    {
        // TODO: Implement update() method.
    }

    public function delete(Request $request)
    {
        // TODO: Implement delete() method.
    }

}
