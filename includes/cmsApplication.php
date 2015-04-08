<?php
require_once('cmsBase.php');
//memastikan modul cmsBase hanya di load sekali
class CmsApplication extends CmsBase {
	//Semua kode yang ada disini dapat diakses melalui fungsi utama dalam CMS
	//disini kita dapat membuat fungsi yg dapat
	//dipanggil oleh USER secara langsung
	//semua kode yg ada disini dapat diakses melalui
	//fungsi utama dalam CMS management halaman web

	function run() 
	{
		// di sini akan dibuat kode,  
		// untuk mengatur seluruh proses dalam cmsApplication.
		// Fungsi ini akan dipanggil dari modul TemplateFunctions
		if (isset($_REQUEST['task']))
		{
			$task=$_REQUEST['task'];
			switch($task)
			{
				case 'addcontent':$this->addcontent();break;
				case 'anyothertask':$this->anyothertask();break;
				default:$app->display();break;
			}
		}else {
			$this->display();
		}

	}


	function addcontent ()
	{
		echo 'Disini akan dibuat fungsi menambah konten';
	}

	function display ()
	{
		echo 'Disini akan dibuat fungsi untuk menampilkan konten';
	}

	function anyothertask ()
	{
		echo 'Disini akan ditulis fungsi yang lainnya';
	}
}