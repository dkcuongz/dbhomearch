<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class IntroduceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repository;

    /**
     * categoriesController constructor.
     *
     * @param PostRepository $repository
     */
    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $introduce = $this->repository->whereHas('category', function ($query) {
//            $query->where('id', 7);
//        })->first();
        return view('front-end.introduces.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($slug)
    {
        $introduce = $this->repository->whereHas('category', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->first();
        return view('front-end.introduces.detail', compact('introduce'));
    }
}
