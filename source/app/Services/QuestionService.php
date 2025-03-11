<?php

namespace App\Services;

use App\Models\Question;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\Log;

class QuestionService
{
    protected $questionRepository;

    public function __construct(QuestionRepositoryInterface $questionRepository)
    {
        $this->questionRepository = $questionRepository;
    }

    /**
     * Create new question
     *
     * @param array $data
     * @return Question
     */
    public function createQuestion(array $data): ?Question
    {
        try {
            return $this->questionRepository->create($data);
        } catch (Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return null;
        }
    }

    public function getCategoryQuestion()
    {
        try {
            return $this->questionRepository->getCategoryQuestion();
        } catch (Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return [];
        }
    }
}
