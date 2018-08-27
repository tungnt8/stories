<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrawlerController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$html = new \Htmldom('http://sstruyen.com/doc-truyen/2016/01/kiem-hiep.html');
		
		//get total page
		$page_node = $html->find('.page-split', 0)->find('a', 5)->plaintext;
		$array_stories = [];
		for($i = 0; $i < 1; $i++) {
			$link = 'http://sstruyen.com/doc-truyen/kiem-hiep/page-'.$i.'.html';
			$page_content = new \Htmldom($link);
			$nodes = $page_content->find('.storyinfo');
			
			foreach($nodes as $node) {
				$push = array(
					'title' => $node->find('.listTitle', 0)->find('a', 0)->plaintext,
					'category' =>  $node->find('.authorBlock', 0)->plaintext,
					'author' =>  $node->find('.authorBlock', 1)->plaintext,
					'summary' => '',
					'feature_image' =>  $this->getImageLink($node->find('.float_left', 0)->find('img', 0)->src),
					'url' =>  'http://sstruyen.com/'.$node->find('.listTitle', 0)->find('a', 0)->href,
					'source' => 'http://sstruyen.com/',
				);
				DB::table('tmp_stories')->insert($push);
				array_push($array_stories, $push);
			}
		}
		
		return json_encode($array_stories);
	}
	
	protected function getImageLink($link) {
		$tmp = explode('url=', $link);
		return count($tmp) >= 2 ? $tmp[1] : '';
	}

	protected function donwloadImage($link) {
		
	}

	public function getStory(Request $request) {
		
		$link = 'http://sstruyen.com/doc-truyen/vo-tan-kiem-trang/1024.html';
		// $link = $request->input('link');
		// dd($link);
		$html = new \Htmldom($link);
		//get description
		$story_description = $html->find('.story_description', 0)->plaintext;

		//get total page of chapter list
		$page_node = $html->find('.page-split', 0)->find('a');
		$total_page = $page_node[count($page_node) - 1]->plaintext;
		
		//get list of chapter
		$chapters = array();
		for ($i = 0; $i < $total_page; $i++) {
			$chapter_link = 'http://sstruyen.com/doc-truyen/vo-tan-kiem-trang/1024/page-'.$i.'.html#chaplist';
			$chapter_html = new \Htmldom($chapter_link);
			$chapter_nodes = $chapter_html->find('.chuongmoi', 1)->find('a');
			
			// dd($cha)
			foreach($chapter_nodes as $chapter) {
				// dd($chapter->plaintext);

				array_push($chapters, array(
						'link' => 'http://sstruyen.com/'.$chapter->href,
						'title' => $chapter->plaintext,
					)
				);
			}
		}

		return json_encode(array(
			'story_description' => $story_description,
			'chapters' => $chapters
		));
		//get info story

		//get description

		//get list of chapters
	}
	public function getContentChapter() {
		$link = 'http://cf.sstruyen.com/doc-truyen/index.php?ajax=ct&id=194711&t=00000000000000';

		$html = file_get_contents($link);
		echo $html;
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
			//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
			//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
			//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
			//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
			//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
			//
	}
}
