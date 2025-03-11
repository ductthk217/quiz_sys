<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Candidate\CandidateRequest;
use App\Repositories\Interfaces\CandidateRepositoryInterface;
use App\Services\Interfaces\CandidateServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    private $candidateServiceInterface;
    public function __construct(CandidateServiceInterface $candidateServiceInterface)
    {
        $this->candidateServiceInterface = $candidateServiceInterface;
    }
    public function index()
    {
        $candidate = $this->candidateServiceInterface->getAll();
        return view('candidates.list')->with('candidate', $candidate);
    }
    public function create()
    {
        return view('candidates.create');
    }
    public function store(CandidateRequest $request)
    {
        $validatedData = $request->validated();

        $candidate = $this->candidateServiceInterface->create($validatedData);

        if ($candidate) {
            return redirect()->back()->with('success', 'Candidate added successfully!');
        }
    }
    public function edit($id)
    {
        $candidate = $this->candidateServiceInterface->getById($id);
        return view('candidates.edit')->with('candidate', $candidate);
    }
    public function update(CandidateRequest $request, $id)
    {
        $validatedData = $request->validated();
        $candidate = $this->candidateServiceInterface->update($id, $validatedData);
        if ($candidate) {
            return redirect()->route('candidates.index')->with('success', 'Candidate updated successfully!');
        }
        return redirect()->back()->with('info', 'No changes detected!');
    }
    public function destroy($id){
        $candidate = $this->candidateServiceInterface->delete($id);
        if($candidate){
            return redirect()->route('candidates.index')->with('success', 'Candidate deleted successfully!');
        }
    }
}
