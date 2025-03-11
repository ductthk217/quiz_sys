<?php

namespace Sample\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Sample\Models\User;
use Sample\Services\UserService;
use Illuminate\Http\Request;

class UserController
{
    /**
     * Summary of __construct
     */
    public function __construct(protected UserService $userService)
    {
    }

    /**
     * Summary of index
     * 
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json($this->userService->getAll());
    }

    /**
     * Summary of show
     * @param \Sample\Models\User $user
     * 
     * @return JsonResponse|mixed
     */
    public function showBinding(User $user): JsonResponse
    {
        return response()->json($user);
    }

    /**
     * Summary of show
     * @param  $id
     * 
     * @return JsonResponse|mixed
     */
    public function show($id): JsonResponse
    {
        return response()->json($this->userService->getUserById($id));
    }

    /**
     * Summary of store
     * @param \Illuminate\Http\Request $request
     * 
     * @return JsonResponse|mixed
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json($this->userService->create($request->all()));
    }

    /**
     * Summary of updateBinding
     * @param \Illuminate\Http\Request $request
     * @param \Sample\Models\User $user
     * 
     * @return JsonResponse|mixed
     */
    public function updateBinding(Request $request, User $user): JsonResponse
    {
        return response()->json($user->update($request->all()));
    }

    /**
     * Summary of update
     * @param \Illuminate\Http\Request $request
     * @param mixed $id
     * 
     * @return JsonResponse|mixed
     */
    public function update(Request $request, $id): JsonResponse
    {
        $user = $this->userService->update($id, $request->all());
        return $user ? response()->json($user) : response()->json(['messages' => 'Something wrong!!'], 400);
    }

    /**
     * Summary of destroy
     * @param mixed $id
     * 
     * @return JsonResponse|mixed
     */
    public function destroy($id): JsonResponse
    {
        return response()->json($this->userService->delete($id));
    }
}
