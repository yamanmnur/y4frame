<?php
	/**
	* 
	*/
	class Core_Controller
	{
		public $page;
		public $titlePage;
		public $metaPage;
		public $waktu;
		public $tahun;
		public $tanggal;
		public $hari;

		public function __construct()
		{
			# code...
		}
		public function render(){
				require_once 'view/'.$this->page.'.php';
		}
		public function setMeta($meta){

		}
		public function setTitle($titlePage){

		}

		public function getMeta(){

		}
		public function getTitle(){

		}


	}