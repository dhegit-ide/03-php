<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		$data = [
			'judul' => 'About Us'
		];
		echo view("about", $data);
	}

	public function contact()
	{
		$data = [
			'judul' => 'Contact',
			'name' => 'Petani Kode'
		];
		echo view("contact", $data);
	}

	public function faqs()
	{
		$data = [
			'judul' => 'Faqs',
			'data_faqs' => [
				[
					'question' => 'Apa itu Codeigniter?',
					'answer' => 'Codeigniter adalah framework untuk membuat web'
				],
				[
					'question' => 'Siapa yang membuat Codeiginter?',
					'answer' => 'CI awalnya dibuat oleh Ellislab'
				],
				[
					'question' => 'Codeigniter versi berapakah yang digunakan pada tutoril ini?',
					'answer' => 'Codeigniter versi 4.0.4'
				]
			]
		];

		echo view("faqs", $data);
	}
}