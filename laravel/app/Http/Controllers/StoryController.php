<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;
use App\Chapter;
use App\Category;
use Illuminate\Support\Facades\Gate;
use Auth;

class StoryController extends Controller
{
    /*
     * Api methods
     **/

    public function index(Request $request) {
        $count = isset($request->count) ? intval($request->count) : 15;
        $page = isset($request->page) ? intval($request->page) : 1;
        $is_completed = isset($request->is_completed) ? intval($request->is_completed) : 0;
        $is_hot = isset($request->is_hot) ? intval($request->is_hot) : 0;
        $category = isset($request->category) ? intval($request->category) : 0;

        $stories = Story::get_list(
            $is_completed,
            $is_hot,
            $category,
            $count,
            $page
        );
        return response()->json($stories);
    }

    public function chapters(Request $request) {
        if (isset($request->story_id)) {
            $story_id = $request->story_id;
            $count = isset($request->count) ? intval($request->count) : 15;
            $page = isset($request->page) ? intval($request->page) : 1;
            $is_newest = isset($request->is_newest) ? true : false;
            $chapters = Chapter::get_chapters_by_story_id($story_id, $count, $page, $is_newest);

            return response()->json($chapters);
        }
    }


    /*
     * admin methods
     */
    public function admin_list_story(Request $request) {
        if (Gate::allows('list-story')) {
            $search = $request->query('search') || '';
            $category_id = $request->query('category_id') ? intval($request->query('category_id')) : 0;
            $is_completed = $request->query('complete') ? intval($request->query('complete')) : 0;
            $is_hot = $request->query('hot') ? intval($request->query('hot')) : 0;
            $count = $request->query('count') ? intval($request->query('count')): 15;

            $stories = Story::admin_get_list($search, $is_completed, $is_hot, $category_id, $count);
            return view('stories.admin_list', ['stories' => $stories]);
        }
        return redirect()->back();
    }

    public function admin_list_chapter(Request $request) {
        $story_id = intval($request->query('story_id'));
        $story = Story::find($story_id);

        if ($story) {
            if (Gate::allows('list-chapter', Auth::user(), $story)) {
                $chapters = Chapter::admin_get_chapters_by_story_id($story->id, 15, false);
                return view('stories.admin_chapters_list', ['chapters' => $chapters, 'story' => $story]);
            }
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function admin_create() {
        $categories = Category::get_list();
        return view('stories.admin_create', ['categories' => $categories]);
    }

    public function admin_store(Request $request) {
        dd($request->all());
    }
}
