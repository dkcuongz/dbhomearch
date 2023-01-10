<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
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
        $news = $this->repository->with('image')->get();
        return view('front-end.news.index', compact('news'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = $this->repository->with('image')->find($id);
        return view('front-end.news.detail', compact('new'));
    }
}
