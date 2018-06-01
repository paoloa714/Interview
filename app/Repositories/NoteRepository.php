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
    /**
     * @param $id
     * @param Request $request
     * @return Note
     */
    public function get($id, Request $request)
    {
        /** @var Note $note */
        $note = Note::where('user_id', '=', Auth::user()->id)
            ->where('id', '=', $id)->firstOrFail();
        return $note;
    }

    /**
     * @param Request $request
     * @return Note[]|\Illuminate\Database\Eloquent\Collection
     */
    public function list(Request $request)
    {
        return Note::all()
            ->where('user_id', '=', Auth::user()
                ->id);
    }

    /**
     * @param Request $request
     * @return Note
     */
    public function create(Request $request)
    {
        $noteInfo = $request->all();
        $note = new Note();
        $this->setNoteInfo($note, $noteInfo);

        $note->save();
        return $note;
    }

    /**
     * @param $id
     * @param Request $request
     * @return Note
     */
    public function update($id, Request $request)
    {
        $noteInfo = $request->all();
        /** @var Note $note */
        $note = $this->get($id , $request);
        $this->setNoteInfo($note, $noteInfo);
        $note->save();
        return $note;
    }

    /**
     * @param $id
     * @param Request $request
     * @return bool
     * @throws \Exception
     */
    public function delete($id, Request $request)
    {
        $note = $this->get($id , $request);
        $note->delete();

        return true;
    }

    /**
     * @param Note $note
     * @param array $noteInfo
     * @return Note
     */
    protected function setNoteInfo(Note $note, array $noteInfo)
    {
        $note->setAttribute('title', $noteInfo['title']);

        $noteText = $noteInfo['note'] ?? '';
        $note->setAttribute('note', $noteText);
        $note->setAttribute('user_id', Auth::user()->id);

        return $note;
    }
}
