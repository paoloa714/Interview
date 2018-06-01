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
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteRepository implements RepositoryInterface
{
    public function get(Request $request)
    {
    }

    public function list(Request $request)
    {
        return Note::all()
            ->where('user_id' , '=' , Auth::user()
                ->id);
    }

    public function create(Request $request)
    {
        $noteInfo = $request->all();
        $note = new Note();
        $note->setAttribute('title' , $noteInfo['title']);
        $note->setAttribute('note' , $noteInfo['note']);

        $note->setAttribute('user_id' , Auth::user()->id);
        $note->save();
        return $note;
    }

    public function update($id , Request $request)
    {
        $noteInfo = $request->all();
        var_dump($id , $noteInfo);
        die;
        $note = Note::findOrFail($noteInfo['id']);

        return $note;
    }

    public function delete(Request $request)
    {
        // TODO: Implement delete() method.
    }

}
