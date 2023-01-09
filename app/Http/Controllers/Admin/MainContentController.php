<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainContentCreateRequest;
use App\Http\Requests\MainContentUpdateRequest;
use App\Repositories\MainContentRepository;

class MainContentController extends Controller
{
    /**
     * @var MainContentRepository
     */
    protected $repository;

    /**
     * UsersController constructor.
     *
     * @param MainContentRepository $repository
     */
    public function __construct(MainContentRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->repository->all();
        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MainContentCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(MainContentCreateRequest $request)
    {
        try {
            $user = $this->repository->create($request->all());

            $response = [
                'message' => 'User created.',
                'data' => $user->toArray(),
            ];
            return redirect()->back()->with('message', $response['message']);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->repository->find($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->repository->find($id);

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MainContentUpdateRequest $request
     * @param string $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(MainContentUpdateRequest $request, $id)
    {
        try {
            $user = $this->repository->update($request->all(), $id);
            $response = [
                'message' => 'User updated.',
                'data' => $user->toArray(),
            ];
            return redirect()->back()->with('message', $response['message']);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->back()->with('message', 'User deleted.');
    }
}
