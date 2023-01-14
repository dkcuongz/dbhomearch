<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $postRepository;

    /**
     * categoriesController constructor.
     *
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = $this->postRepository->with('image')->all();
        return view('home.index', compact('posts'));
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $posts = $this->postRepository->where('title', 'LIKE', '%' . $request->search . '%')->get();
            if ($posts) {
                foreach ($posts as $key => $post) {
                    $output .= '<div class="autocomplete-suggestion" data-index="0">
                    <img class="search-image" src="' . $post->image->path . '">' . '
                    <div class="search-name">' . $post->title . '</div>';
                }
            }
            return Response($output);
        }
    }
}
