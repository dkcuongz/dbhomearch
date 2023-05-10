<?php

namespace App\Http\Controllers\FrontEnd;

use App\Entities\Post;
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
        $posts = Post::with('image')->where('type', config('constants.post.type.post'))->where('is_out_standings', 0)->where('is_reality', 0)->get();
        $posts_out_standings = Post::with('image')->where('type', config('constants.post.type.post'))->where('is_out_standings', 1)->get();
        $posts_reality = Post::with('image')->where('type', config('constants.post.type.post'))->where('is_reality', 1)->get();
        return view('home.index', compact('posts','posts_out_standings','posts_reality'));
    }

    public function search(Request $request)
    {
        $interiors = $this->postRepository->where('title', 'LIKE', '%' . $request->search . '%')
            ->where('status', 1)->where('type', config('constants.post.type.post'));
        if ($request->ajax()) {
            $output = '';
            $interiors = $interiors->get();
            if ($interiors) {
                foreach ($interiors as $key => $interior) {
                    $output .= '<div class="autocomplete-suggestion" data-index="0">
                    <a class="hover-seach" href="' . route('front.thiet-ke-noi-that.detail', [$interior->category->slug ?? '', $interior->id]) . '">
                    <img class="search-image" src="' . asset($interior->image->path) . '">' . '
                    <div class="search-name">' . $interior->title . '</div>
                    </a>
                    </div>';
                }
            }
            return Response($output);
        } else {
            $interiors = $interiors->paginate(8);
            return view('front-end.interiors.index', compact('interiors'));
        }
    }
}
