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
        $news = $this->repository->with('image')->where('status', 1)
            ->where('type', config('constants.post.type.new'))->orderBy('created_at', 'DESC')->paginate(8);
        return view('front-end.news.index', compact('news'));
    }

    public function byCategory($slug)
    {
        $news = $this->repository->with('image')->where('status', 1)
            ->where('type', config('constants.post.type.new'))
            ->whereHas('category', function ($query) use($slug){
                $query->where('slug', $slug);
            })->orderBy('created_at', 'DESC')->paginate(8);
        return view('front-end.news.index', compact('news'));
    }

    public function show($slug, $id)
    {
        $new = $this->repository->with('image')->where('status', 1)
            ->where('type', config('constants.post.type.new'))->orderBy('created_at', 'DESC')->find($id);
        return view('front-end.news.detail', compact('new'));
    }
}
