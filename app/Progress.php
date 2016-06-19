<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model {

  protected $table    = 'progress';
  // protect against mass assignment
  protected $fillable = [
    'id',
    'uid',
    'eid',
    'week',
    'weight',
    'comments'
  ];

  public function index() {
    //Select all records from books table via Book method

    $progressRecords = Progress::all();    //Eloquent ORM method to return all matching results

    // var_dump(compact('progressRecords'));
    //Redirecting to progress.blade.php with $allBooks       
    return View('progress.index', compact('progressRecords'));
  }

}
