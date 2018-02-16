<?php
	/**
	* 
		browser => routing => cotnroller => model
										 => view
	*/

	class Index extends Core_Controller
	{
		
		
		public function __construct()
		{

			echo "hai ini class ".__CLASS__;
			echo "<br>kunjungi halaman <a href='index.php?page=contact'>about</a>";
			$this->page = "home";
			$this->render();
			$a = 0;
			$b = 0;
			while ($a < 10 && $b < 10) {
				echo $a."<br>";
				echo $b."<br>";
				$a++;
				$b++;
			}
		}
		public function load_page($page)
		{
			
		}


	}