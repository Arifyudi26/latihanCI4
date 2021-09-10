<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;
use RegexIterator;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	//--------------------------------------------------------------------
	// Rules Login
	//--------------------------------------------------------------------
	public $login = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
		'remember' => [
			'rules' => 'required',
		],
	];
	// public $login_errors = [
	// 	'username' => [
	// 		'required' => '{Field} Harus Di Isi !',
	// 		'min_length' => '{Field} Minimal Lima Karakter'
	// 	],
	// 	'password' => [
	// 		'required' => '{Field} Harus Di Isi !',
	// 	],
	// 	'remember' => [
	// 		'required' => '{Field} Harus Di Isi !',
	// 	],
	// ];

	//--------------------------------------------------------------------
	// Rules Register
	//--------------------------------------------------------------------

	public $register = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
		'repeatPassword' => [
			'rules' => 'required|matches[password]',
		],
		'agree-term' => [
			'rules' => 'required',
		],
	];
	public $register_errors = [
		'username' => [
			'required' => '{Field} Harus Di Isi !',
			'min_length' => '{Field} Minimal Lima Karakter'
		],
		'password' => [
			'required' => '{Field} Harus Di Isi !',
		],
		'repeatPassword' => [
			'required' => '{Field} Harus Di Isi !',
			'matches' => '{Field} Tidak Sama Dengan Password'
		],
		'agree-term' => [
			'required' => '{Field} centang harus di isi !',
		],
	];
}