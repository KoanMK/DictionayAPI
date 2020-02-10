<?php

namespace App\Http\Controllers\Api\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\v2\WordResource;
use App\Word;

class WordsController extends Controller
{
    public function show(Word $word) : WordResource
    {
        return new WordResource($word);
    }
}
