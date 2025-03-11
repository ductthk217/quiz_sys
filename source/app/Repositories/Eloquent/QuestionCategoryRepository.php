<?php

namespace App\Repositories\Eloquent;

use App\Models\QuestionCategory;
use App\Repositories\Interfaces\QuestionCategoryRepositoryInterface;

class QuestionCategoryRepository extends BaseRepository implements QuestionCategoryRepositoryInterface
{
    public function getModel()
    {
        return QuestionCategory::class;
    }
}
