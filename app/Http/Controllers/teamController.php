<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class teamController extends Controller
{
    public function addTeam()
    {
      return view('post-team');
    }
  public function saveTeam(Request $request)

    {
     DB::table('teams')->insert([
         'FullName'=>$request->FullName,
         'Email'=>$request->Email,
         'Telephone'=>$request->Telephone,
         'JoineDate'=>$request->JoineDate,
         'CurrentRoute'=>$request->CurrentRoute,
         'Comments'=>$request->Comments

     ]);
     return back()->with('post','Member Added Successfully');
    }
    public function team()
    {  $teams = DB::table('teams')->get();
      return view('team',compact('teams'));
   
    }

    
    public function viewMember($id)
    {
       $team = DB::table('teams')->where('id', $id)->first();
      return view('viewMember',compact('team'));
    }


  public function editTeam($id) 
  {
    $team = DB::table('teams')->where('id', $id)->first();
    return view('edit-team',compact('team'));
  }
  public function updateTeam(Request $request)

    {
      DB::table('teams')->where('id',$request->id)->update([
        'FullName'=>$request->FullName,
        'Email'=>$request->Email,
        'Telephone'=>$request->Telephone,
        'JoineDate'=>$request->JoineDate,
        'CurrentRoute'=>$request->CurrentRoute,
        'Comments'=>$request->Comments 
       ]);
       return back()->with('team_update','Details Updated Successfuly');
  }
    public function deleteTeam($id)
  {
    DB::table('teams')->where('id', $id)->delete();
    return back()->with('team','Details deleted Successfuly');
  }
  
}

