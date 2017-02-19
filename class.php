<?php 
/**
* 
*/
class Video
{
	//argumentos publicos
	public $image;
	public $link;
	
	//metodo construtor que recebe dois parametros
	public function __construct($image, $link)
	{
		//referencia aos argumentos publico linha 8 e 9
		$this->image = $image;
		$this->link = $link;
	}

	/**
	* Classe canal Youtube
	*/
	class CanalYoutube
	{
		
		public static function getVideos()
		{
			//codigo temporario
			$video1 = new Video("image1", "link1");
			$video2 = new Video("image2", "link2");
			$video3 = new Video("image3", "link3");

			return
		}
	}
}
 ?>