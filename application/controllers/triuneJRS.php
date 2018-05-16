<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class triuneJRS extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		https://tua.edu.ph/triune/auth
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://tua.edu.ph/triune
	 *
	 * AUTHOR: Charlene Cruz
	 * DESCRIPTION: JRS Controller. Included 
	 * DATE CREATED: May 16, 2018
     * DATE UPDATED: May 16, 2018
	 */

    function __construct() {
        parent::__construct();
		$this->load->library('session');
    }//function __construct()


    public function BAMCreateRequest() {
        $this->load->view('bamjrs/create');
    }

    public function BAMCreateRequestConfirmation() {
		$data['locationCode'] = $_POST["locationCode"];
		$data['floor'] = $_POST["floor"];
		$data['roomNumber'] = $_POST["roomNumber"];
		$data['projectTitle'] = $_POST["projectTitle"];
		$data['scopeOfWorks'] = $_POST["scopeOfWorks"];
		$data['projectJustification'] = $_POST["projectJustification"];
		$data['dateNeeded'] = $_POST["dateNeeded"];


        $this->load->view('bamjrs/createConfirmation', $data);
    }

    public function BAMCreatedRequest() {
		$data['ID'] = $_POST["ID"];
        $this->load->view('bamjrs/createdRequest', $data);
    }

	public function ICTCreateRequest() {
        $this->load->view('ictjrs/create');
    }

    public function ICTCreateRequestConfirmation() {
		$data['requestDescription'] = $_POST["requestDescription"];
		$data['jobClassification'] = $_POST["jobClassification"];
		$data['dateNeeded'] = $_POST["dateNeeded"];


        $this->load->view('ictjrs/createConfirmation', $data);
    }

    public function ICTCreatedRequest() {
		$data['ID'] = $_POST["ID"];
        $this->load->view('ictjrs/createdRequest', $data);
    }

}