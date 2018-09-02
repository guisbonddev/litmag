<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function submit()
    {
    	return view('submit');
    }

    public function store(Request $request)
    {
    	$this->validate($request, array(
			'files' => 'required'
		));

    	$submission = new Submission(array(
	    	$submission->name = $request('name'),
	    	$submission->homeroom = $request('homeroom'),
	    	$submission->email = $request('email'),
	    	$submission->grade = $request('grade'),
	    	$submission->teacher = $request('teacher'),
	    	$submission->titles = $request('titles'),
	    	$submission->comments = $request('comments')
    	));

    	$submission->save();

    	foreach ($request('files') as $file){

	    	$file = $submission->name-$submission->id . '.' .
	    		$request->file('files')->getClientOriginalExtension();

	    	$request->file('file')->move(
	        	base_path() . '/public/submissions', $file
	  	);

    	}

    	return view('submit')->with('message', '<b>Success:</b> Thanks for submitting!');;
    }
}
