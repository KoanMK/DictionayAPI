<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\v1\WordResource;
use App\Http\Resources\v1\WordResourceCollection;
use App\Word;

class WordsController extends Controller
{
    /**
     * @param Word $word
     * @return WordResource
     */
    public function show(Word $word) : WordResource
    {
        return new WordResource($word);
    }

    /**
     * @return WordResourceCollection
     */
    public function index() : WordResourceCollection
    {
        return new WordResourceCollection(Word::paginate());
    }

    /**
     * @param Request $request
     * @return WordResource $word
     */
    public function store(Request $request) : WordResource
    {
        $request->validate([
            'word'          => 'required',
            'type'          => 'required',
            'description'   => 'required',
        ]);
        $word = Word::create($request->all()); 
        return new WordResource($word);
    }

    /**
     * @param Word $word
     * @param Request $request
     * @return WordResource $word
     */
    public function update(Word $word, Request $request) : WordResource
    {
        // should probably do some validation here before updating

        $word->update($request->all());
        return new WordResource($word);
    }

    /**
     * @param Word $word
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Word $word)
    {
        $word->delete();
        return response()->json();
    }
}
