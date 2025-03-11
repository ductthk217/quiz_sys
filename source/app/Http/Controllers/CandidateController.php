<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Candidate\CandidateRequest;
use App\Repositories\Interfaces\CandidateRepositoryInterface;
use App\Services\CandidateService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    private $candidateService;
    public function __construct(CandidateService $candidateServiceInterface)
    {
        $this->candidateService = $candidateServiceInterface;
    }
    public function index()
    {
        $candidate = $this->candidateService->getAll();
        return view('candidates.list')->with('candidate', $candidate);
    }
    public function create()
    {
        return view('candidates.create');
    }
    public function store(CandidateRequest $request)
    {
        $validatedData = $request->validated();

        $candidate = $this->candidateService->create($validatedData);

        if ($candidate) {
            return redirect()->back()->with('success', 'Candidate added successfully!');
        }
    }
    public function edit($id)
    {
        $candidate = $this->candidateService->getById($id);
        return view('candidates.edit')->with('candidate', $candidate);
    }
    public function update(CandidateRequest $request, $id)
    {
        $validatedData = $request->validated();
        $candidate = $this->candidateService->update($id, $validatedData);
        if ($candidate) {
            return redirect()->route('candidates.index')->with('success', 'Candidate updated successfully!');
        }
        return redirect()->back()->with('info', 'No changes detected!');
    }
    public function destroy($id){
        $candidate = $this->candidateService->delete($id);
        if($candidate){
            return redirect()->route('candidates.index')->with('success', 'Candidate deleted successfully!');
        }
    }
}
