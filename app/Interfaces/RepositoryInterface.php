<?php
/**
 * Created by PhpStorm.
 * User: paoloaquino
 * Date: 6/1/18
 * Time: 1:56 PM
 */

namespace App\Interfaces;


use Illuminate\Http\Request;

interface RepositoryInterface
{

    public function get(Request $request);
    public function list(Request $request);
    public function create(Request $request);
    public function update(Request $request);
    public function delete(Request $request);

}
