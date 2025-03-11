<?php

namespace App\Services\Interfaces;

use App\Models\Question;

interface QuestionServiceInterface
{
    /**
     * How to create new Question
     *
     * @param array $data
     * @return Question
     */
    public function createQuestion(array $data): Question;
}
