<?php

namespace App\Http\Controllers;

use App\Repositories\Posts\PostEloquentRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @var
     */
    public $postRepository;

    public function __construct(PostEloquentRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    /**
     * Show all post
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $posts = $this->postRepository->getAll();

        return view('home.posts', compact('posts'));
    }

    /**
     * Show single post
     *
     * @param $id int Post ID
     *
     * @return Application|Factory|View
     */
    public function show(int $id)
    {
        $post = $this->postRepository->find($id);

        return view('home.post', compact('post'));
    }

    /**
     * Create single post
     *
     * @param $request Request
     *
     * @return Application|Factory|View
     */
    public function store(Request $request)
    {
        $data = $request->all();

        //... Validation here

        $post = $this->postRepository->create($data);

        return view('home.post', compact('post'));
    }

    /**
     * Update single post
     *
     * @param $request Request
     * @param $id      int Post ID
     *
     * @return Application|Factory|View
     */
    public function update(Request $request, int $id)
    {
        $data = $request->all();

        //... Validation here

        $post = $this->postRepository->update($id, $data);

        return view('home.post', compact('post'));
    }

    /**
     * Delete single post
     *
     * @param $id int Post ID
     *
     * @return Application|Factory|View
     */
    public function destroy(int $id)
    {
        $this->postRepository->delete($id);
        return view('home.post');
    }
}
