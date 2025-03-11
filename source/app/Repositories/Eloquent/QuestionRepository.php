<?php

namespace App\Repositories\Eloquent;

use App\Models\Question;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
use Illuminate\Support\Facades\DB;

class QuestionRepository extends BaseRepository implements QuestionRepositoryInterface
{
    public function getModel()
    {
        return Question::class;
    }

    public function getCategoryQuestion()
    {
        return DB::table('question_categories')->select(['id', 'name'])->orderBy('name')->get();
    }
}
