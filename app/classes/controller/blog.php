<?php
class Controller_Blog extends Controller 
{
		public function action_index()
		{
				$mongodb = \Mongo_Db::instance();
				$results = $mongodb->insert('posts', array('name' => '名前', 'contents' => 'コンテンツ'));
				$results = $mongodb->get('posts');
				var_dump($results);
				return ($results);
		}
		public function action_category($cat = 'php',$page = '1')
		{
				return __FILE__ . '<br />' . $cat . '<br />' . $page;
		}
}
?>
