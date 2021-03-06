<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Installer
 *
 * @package      Installer
 * @author       Natan Felles <natanfelles@gmail.com>
 *
 * @property Installer_model $installer_model Acesso às funções de instalação
 */
class Installer extends CI_Controller {

	/**
	 * Installer constructor
	 *
	 * @todo Proteger acesso direto a /installer
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('installer_model');
	}

	public function index()
	{
		$this->installer_model->create_tables();
		$this->load->view('dev/installer/index');
	}

}
