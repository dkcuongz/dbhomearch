<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Repositories\CategoriesRepository;
use App\Repositories\ImageRepository;
use App\Repositories\PostRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * @var PostRepository
     */
    protected $repository;

    /**
     * @var ImageRepository
     */
    protected $imageRepository;

    /**
     * The user repository implementation.
     *
     * @var CategoriesRepository
     */
    protected $categoryRepository;

    /**
     * projectsController constructor.
     *
     * @param PostRepository $repository
     */
    public function __construct(PostRepository $repository, ImageRepository $imageRepository, CategoriesRepository $categoryRepository)
    {
        $this->repository = $repository;
        $this->imageRepository = $imageRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->repository->with('image')->whereHas('category', function ($query) {
            $query->whereHas('parent', function ($subQuery) {
                $subQuery->where(['id' => 4]);
            });
        })->where('type',config('constants.post.type.project'))->get();
        return view('admin.projects.index', compact('projects'));
    }


    public function create()
    {
        $categories = $this->categoryRepository->with(['allLevelChildren'])->where('parent_id', '=', 4)->get();
        return view('admin.projects.create', compact('categories'));
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
        DB::beginTransaction();
        try {
            $data = $request->all();
            $data['type'] = config('constants.post.type.project');
            $project = $this->repository->create($data);
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = $file->hashName();
                Storage::put('images', $file, 'public');
                $dataImage['path'] = 'images/' . $filename;
                $dataImage['post_id'] = $project->id;
                $this->imageRepository->create($dataImage);

            }
            $response = [
                'message' => 'Tạo mới dự án thành công.',
                'data' => $project->toArray(),
            ];
            DB::commit();
            return redirect(route('admin.projects.index'))->with('success_message', $response['message']);
        } catch (\Exception $e) {
            DB::rollBack();
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
        $categories = $this->categoryRepository->with(['allLevelChildren'])->where('parent_id', '=', 4)->get();
        $project = $this->repository->with('image')->find($id);
        return view('admin.projects.detail', compact('project', 'categories'));
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
        $categories = $this->categoryRepository->with(['allLevelChildren'])->where('parent_id', '=', 4)->get();
        $project = $this->repository->with('image')->find($id);
        return view('admin.projects.edit', compact('project', 'categories'));
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
        DB::beginTransaction();
        try {
            $data = $request->all();
            $data['type'] = config('constants.post.type.project');
            $project = $this->repository->update($data, $id);
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = $file->hashName();
                Storage::put('images', $file, 'public');
                $dataImage['path'] = 'images/' . $filename;
                $dataImage['post_id'] = $project->id;
                $this->imageRepository->where('post_id', $project->id)->delete();
                $this->imageRepository->create($dataImage);
            }
            $response = [
                'message' => 'Cập nhật dự án thành công',
                'data' => $project->toArray(),
            ];
            DB::commit();
            return redirect(route('admin.projects.index'))->with('success_message', $response['message']);
        } catch (\Exception $e) {
            DB::rollBack();
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
        $project = $this->repository->find($id);
        $project->images()->delete();
        $project->delete();
        return redirect()->back()->with('success_message', 'Xóa dự án thành công');
    }
}
