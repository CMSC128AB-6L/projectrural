<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStudents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('students')->insert(array(
				'id' => '1',
				'Student_number' => '2012-11111',
				'FName' => 'Maria',
				'MName' => 'Margarita',
				'LName' => 'Ocampo',
				'Type' => '7',
				'Section' => 'Kalachuchi',
				'User_id' => '1',
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('students')->insert(array(
				'id' => '2',
				'Student_number' => '2012-22222',
				'FName' => 'Mario',
				'MName' => 'Magna',
				'LName' => 'Doculan',
				'Type' => '7',
				'Section' => 'Kalachuchi',
				'User_id' => '1',
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('students')->insert(array(
				'id' => '3',
				'Student_number' => '2012-33333',
				'FName' => 'Bjorn',
				'MName' => 'Angelo',
				'LName' => 'Atienza',
				'Type' => '7',
				'Section' => 'Kalachuchi',
				'User_id' => '1',
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('students')->insert(array(
				'id' => '4',
				'Student_number' => '2012-44444',
				'FName' => 'King',
				'MName' => 'Cueto',
				'LName' => 'Amurao',
				'Type' => '7',
				'Section' => 'Kalachuchi',
				'User_id' => '1',
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('students')->insert(array(
				'id' => '5',
				'Student_number' => '2012-55555',
				'FName' => 'Sailah',
				'MName' => 'Limbo',
				'LName' => 'Guerra',
				'Type' => '7',
				'Section' => 'Kalachuchi',
				'User_id' => '1',
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('students')->insert(array(
				'id' => '6',
				'Student_number' => '2012-666666',
				'FName' => 'Kath',
				'MName' => 'So',
				'LName' => 'Villegas',
				'Type' => '7',
				'Section' => 'Kalachuchi',
				'User_id' => '1',
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('students')->insert(array(
				'id' => '7',
				'Student_number' => '2012-77777',
				'FName' => 'Kyle',
				'MName' => 'So',
				'LName' => 'Villegas',
				'Type' => '7',
				'Section' => 'Kalachuchi',
				'User_id' => '1',
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('students')->insert(array(
				'id' => '8',
				'Student_number' => '2012-88888',
				'FName' => 'Kim',
				'MName' => 'Guzman',
				'LName' => 'Antigo',
				'Type' => '7',
				'Section' => 'Kalachuchi',
				'User_id' => '1',
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
		));


		DB::table('students')->insert(array(
				'id' => '9',
				'Student_number' => '2012-99999',
				'FName' => 'Karra',
				'MName' => 'So',
				'LName' => 'Shields',
				'Type' => '7',
				'Section' => 'Kalachuchi',
				'User_id' => '1',
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
		));

		DB::table('students')->insert(array(
				'id' => '10',
				'Student_number' => '2012-00000',
				'FName' => 'Xyrelle',
				'MName' => 'Kipot',
				'LName' => 'Manabat',
				'Type' => '7',
				'Section' => 'Kalachuchi',
				'User_id' => '1',
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('students')->where('id', '=', '1')->delete();
		DB::table('students')->where('id', '=', '2')->delete();
		DB::table('students')->where('id', '=', '3')->delete();
		DB::table('students')->where('id', '=', '4')->delete();
		DB::table('students')->where('id', '=', '5')->delete();
		DB::table('students')->where('id', '=', '6')->delete();
		DB::table('students')->where('id', '=', '7')->delete();
		DB::table('students')->where('id', '=', '8')->delete();
		DB::table('students')->where('id', '=', '9')->delete();
		DB::table('students')->where('id', '=', '10')->delete();

	}

}
