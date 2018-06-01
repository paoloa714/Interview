<?php
/**
 * Created by PhpStorm.
 * User: paoloaquino
 * Date: 6/1/18
 * Time: 1:52 PM
 */

namespace App\Http\Controllers;

use App\Repositories\NoteRepository;

class NoteController extends RestfulController
{
    public function __construct(NoteRepository $noteRepository)
    {
        $this->model = $noteRepository;
    }
}
