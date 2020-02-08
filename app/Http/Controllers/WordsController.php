<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\WordResource;
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
}
