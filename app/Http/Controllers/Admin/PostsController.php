<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Repositories\PostRepository;

class PostsController extends Controller
{
    /**
     * @var PostRepository
     */
    protected $repository;

    /**
     * postsController constructor.
     *
     * @param PostRepository $repository
     */
    public function __construct(PostRepository $repository)
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
        $posts = $this->repository->all();
        return view('admin.posts.index', compact('posts'));
    }


    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
        try {
            $data = $request->all();
            $data['type'] = config('constants.post.type.post');
            $post = $this->repository->create($data);

            $response = [
                'message' => 'Tạo mới bài viết thành công.',
                'data' => $post->toArray(),
            ];
            return redirect(route('admin.posts.index'))->with('success_message', $response['message']);
        } catch (\Exception $e) {
            return redirect()->back()->with('error_message', $e->getMessage())->withInput();
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
        $post = $this->repository->find($id);
        return view('admin.posts.detail', compact('post'));
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
        $post = $this->repository->find($id);

        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostUpdateRequest $request
     * @param string $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $data = $request->all();
        $data['type'] = config('constants.post.type.post');
        try {
            $post = $this->repository->update($data, $id);
            $response = [
                'message' => 'Cập nhật bài viết thành công',
                'data' => $post->toArray(),
            ];
            return redirect(route('admin.posts.index'))->with('success_message', $response['message']);
        } catch (\Exception $e) {
            return redirect()->back()->with('error_message', $e->getMessage())->withInput();
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
        return redirect()->back()->with('success_message', 'Xóa bài viết thành công');
    }
}
