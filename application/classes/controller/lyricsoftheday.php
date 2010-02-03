<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_Lyricsoftheday extends Controller_Template
{
	public $template = 'site';
	private $cache_seconds = 30;
	private $search_terms = array('lyricsoftheday','albumoftheday');

	public function action_index()
	{
		
		$storage = array();
		$tweets = array();
		
		// Check to see if we have a valid cached version
		foreach ($this->search_terms as $item)
		{
			if (($storage[$item] = Kohana::cache($item)) === NULL)
			{
				// We need to generate this item
				$storage[$item] = file_get_contents('http://search.twitter.com/search.json?q=%23'.$item);
			
				// Save the new item to the cache
				Kohana::cache($item, $storage[$item], $this->cache_seconds);
			}
		}

		// Convert the json to an array and send it through to the view
		foreach ($this->search_terms as $item)
		{
			if (($temp = json_decode($storage[$item])) === NULL)
			{
				$this->template->error = __("performance breakdown, and I don't wanna hear it, I'm just not available");
				return;
			}
			$tweets[$item] = $temp->results;
		}
		$this->template->tweets = $tweets;
	}
	
}
