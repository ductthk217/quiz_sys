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
    public function createQuestion(array $data)
    {
        try {
            return $this->questionRepository->create($data);
        } catch (Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return null;
        }
    }

    public function updateQuestion($id, array $data)
    {
        try {
            return $this->questionRepository->update($id, $data);
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

    public function getQuestionById(int $id)
    {
        try {
            return $this->questionRepository->find($id);
        } catch (Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return null;
        }
    }

    public function deleteQuestion(int $id)
    {
        try {
            return $this->questionRepository->delete($id);
        } catch (Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return null;
        }
    }
}
