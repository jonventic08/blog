<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;
class membercontroller extends Controller
{
	public function generateID(){
		$date = date_create();
		$id = $date->getTimestamp(); 
		$randid = $id;
		$cnt =  Member::where('memberid','=',$randid)->count();
		while ( $cnt >= 1) {
			$date = new DateTime();
			$id = $date->getTimestamp(); 
			$randid = $id;
			$cnt =  Member::where('memberid','=',$randid)->count();
		}
		return $randid;
	}
   	public function registration(){
		return view('registration');
	}
	 public function listMember(){
    	$members = Member::get();
    	return view('memberList')->with(['members'=>$members]);
    }
    public function displayMember($memberid){
    	$member =  Member::find($memberid);
		return view('viewMember')->with(['member'=>$member]);
    }
	
	public function saveMember(Request $request){
	$member = new Member();
	$id = $this->generateID();
	$member->memberid = $id;
	$member->memberfname = $request->memberfname;
	$member->memberlname= $request->memberlname;
	$member->save();
	return redirect(url('/member/'.$id.'/view'));
	}
}
