<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//use \application\models\Utilisateur_model;
require APPPATH . '/controllers/Oeuvre.php';


class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo json_encode(["Test"=>"Welcome Page"]);

		$this->load->library('unit_test');

		$test = 1 + 1;

		$expected_result = 2;

		$test_name = 'Adds one plus one';

		$this->unit->run($test, $expected_result, $test_name);

		$test=Oeuvre::findById("1");

		//$user =new Utilisateur();
		//$test=$user::connectUser("coucou@laplateforme.io", "coucou");

		$this->unit->run($test, 'is_object');

		echo $this->unit->report();
	}
}
