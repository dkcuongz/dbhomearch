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
        $introduces = $this->repository->all();
        return view('front-end.introduces.detail', compact('introduces'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($slug)
    {
        $introduce = $this->repository->find($slug);
        return view('front-end.introduces.detail', compact('introduce'));
    }
}
