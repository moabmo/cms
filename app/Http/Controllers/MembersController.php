<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade
use App\Models\Member;

class MembersController extends Controller
{
    public function index()
    {
        // Retrieve all records from the "members" table
        $members = DB::table('members')->paginate(10);

        // Pass the retrieved data to the 'index' view
        return view('index', compact('members'));
    }

    public function getIndex()
    {
        // This method corresponds to the "/members" route
        // Put your code here to retrieve all members or display a list
    }

    public function getSearch(Request $request)
    {
        // This method corresponds to the "/members/search" route
        // Retrieve the search query from $request and perform the search
        $searchQuery = $request->input('search');

        // Put your search logic here...

        // Return a view with the search results
        return view('index', compact('searchResults'));
    }
      public function create()
        {
            return view('members.create');
        }
    
        public function store(Request $request)
        {
            // Validate the form data
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'gender' => 'required',
                'registration_date' => 'required|date',
                'method' => 'required',
                'phone_number' => 'required',
                'email' => 'required|email',
            ]);
    
            // Create a new member record in the database
            Member::create($request->all());
    
            // Redirect back to the index page with a success message
            return redirect()->route('members.index')->with('success', 'Member added successfully!');
        }
}
