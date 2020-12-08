<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class gatos extends Seeder
{
	public function run()
	{
	
	$data =[

		"concepto_de_gasto"=>'escuela',
		"monto_de_gasto"=>'2000',
		"fecha"=>'12 de septimbre'];
		$this->db->table('t_gastos')->insert($data);
	
	}
}
