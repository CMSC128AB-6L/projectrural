<?php

class Students extends BaseController{

	// this function retrieve the students under the advisory of the log-in adviser
	public  function index(){
		$student = DB::table('students')			//using the DB students
					->where('User_id', '=', 1)		//checking if the student is under the advisory of the log-in adviser
					->orderBy('LName')				//arranging the students in aphabetical order
					->get();

						// view [folder.filename]
		return View::make('adviser.homeroomgrade')	//showing the retreived data to the view specified
			->with('title', 'Homeroom Grade')
			->with('students', $student);
	}
 
	//this function retrieve the student under the advisory of the log-in adviser for editing
	public function addHRG(){
		$student = DB::table('students')		//using the DB students
					->where('User_id', '=', 1)	//checking if the student is under the advisory of the log-in adviser
					->orderBy('LName')			//arranging the students in aphabetical order
					->get();

						// view [folder.filename]
		return View::make('adviser.addHRGrade')		//showing the retreived data to the view specified
			->with('title', 'ADD HOMEROOM GRADE')
			->with('students', $student);

	}

	//this function edits the data in the database
	public function create(){
		//$students will only contains the students under the advisory of the log-in adviser
		$student = DB::table('students')
					->where('User_id', '=', 1)
					->orderBy('LName')
					->get();

		$blank = 0;		//flag for checking if a student's grade was left blank

		//this will scan the students one-by-one
		foreach ($student as $stud) {
			$grade = Input::get($stud->id);		//storing the inputed HRGrade to $grade

			if ($grade == 0) {					//if there is no input, NULL will be saved in the database
				$grade = NULL;
				$blank = 1;		//setting to on if a blank was found
			} else{

				Student::where('id', $stud->id)->update(array(	//finding the specific student where the grade will be saved
						'Homeroom_Grade' => $grade
					));

				$grade = $grade*.5;	//computing for the 50% of the Homeroom Grade

				Student::where('id', $stud->id)->update(array(	//saving the computed grade
						'HRY1Q1' => $grade
					));

			}
		}

		if($blank == 1){
			//redirecting to the home page with warning
			return Redirect::route('homeroomgrade')
				->with('message', 'The grade was edited successfully. Warning: Not all students have grades.')
				->with('warning', 'Warning: Not all students have grades.');				
      } else{
			//redirecting to the home page
			return Redirect::route('homeroomgrade')
				->with('message', 'The grade was edited successfully.');
		}
	}
}
