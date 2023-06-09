<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * @var PostRepository
     */
    protected $repository;

    /**
     * @var PostRepository
     */
    protected $imageRepository;

    /**
     * BannerController constructor.
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
        $projects = $this->repository->with('image')->where('type',config('constants.post.type.project'))->get();
        return view('front-end.projects.index', compact('projects'));
    }

    public function byCategory($slug)
    {
        $projects = $this->repository->with('image')->where('status', 1)
            ->where('type', config('constants.post.type.project'))
            ->whereHas('category', function ($query) use($slug){
                $query->where('slug', $slug);
            })->orderBy('created_at', 'DESC')->paginate(8);
        return view('front-end.projects.index', compact('projects'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($lug,$id)
    {
        $project = $this->repository->with('image')->where('type',config('constants.post.type.project'))->find($id);
        return view('front-end.projects.detail', compact('project'));
    }
}
