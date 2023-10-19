<?php
// app/Http/Controllers/MemberController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all(); // Retrieve all members from the database
        return view('members', compact('members')); // Pass members data to the view
    }
}
