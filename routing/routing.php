<?php
	/**
	* 

	*/
	
	class routing
	{
		
		public $title = "halaman utama";
		public $core_controller;
		public $page;
		public function __construct()
		{
			$this->load_page();

		}
		public function load_page()
		{
			
			if (!isset($_GET['page'])) 
			{
				require_once 'controller/Index.php';
				new Index();
			}
			else
			{
				$this->page = ucfirst($_GET['page']);
				if (!file_exists("controller/".$this->page.'.php')) {
					echo "halaman tidak ada !!!!";
				}else{
					require_once 'controller/'.$this->page.'.php';
					new $this->page;
				}
			}
		}


	}