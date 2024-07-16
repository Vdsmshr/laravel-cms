<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        $monthlyPostCountCurrentMonth = Post::whereMonth('created_at', $currentMonth)->count();
        $yearlyPostsCount = Post::whereYear('created_at', $currentYear)->count();
        $totalPostsCount = $posts->count();

        $monthlyPostsCountArray = array_fill(0, 12, 0);

        foreach ($posts as $post) {
            $month = Carbon::parse($post->created_at)->month;
            $monthlyPostsCountArray[$month - 1]++;
        }

        return view('admin.dashboard', compact('posts', 'monthlyPostCountCurrentMonth', 'yearlyPostsCount', 'totalPostsCount', 'monthlyPostsCountArray'));
    }


    public function create()
    {
        $authors = User::all();
        $categories = Category::all();

        return view('admin.post.create', compact('authors', 'categories'));
    }

    public function detail()
    {
        $posts = Post::all();
        return view('admin.post.detail', compact('posts'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'author' => 'required',
            'category' => 'required',
            'status' => 'required|string|in:draft,published,archived',
        ]);

        Post::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'author' => $validatedData['author'],
            'category' => $validatedData['category'],
            'status' => $validatedData['status'],
        ]);

        return redirect()->route('admin.post.index')->with('success', 'Post created successfully.');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'author' => 'required',
            'category' => 'required',
            'status' => 'required|string|in:draft,published,archived',
        ]);

        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('home')->with('error', 'Post not found.');
        }

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->author = $request->input('author');
        $post->category = $request->input('category');
        $post->status = $request->input('status');
        $post->save();

        return redirect()->route('home')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('home')->with('success', 'Post deleted successfully.');
    }
}
