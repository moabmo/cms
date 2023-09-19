<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade

class MembersController extends Controller
{
    public function index()
    {
        // Retrieve all records from the "members" table
        $members = DB::table('members')->paginate(20);

        // Pass the retrieved data to the 'index' view
        return view('index', compact('members'));
    }
}
