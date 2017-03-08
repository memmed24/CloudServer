<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;

class FolderController extends Controller
{	
    public function drive(){
    	$id=1;
    	return Folder::where([['user_id','=',$id],['parent_id','=',1],['hide','=',0]])->get();
    }
    public function fetchFolder(Request $request){
    	$id=1;
    	$check_lock= Folder::select(['sh_name','lock','path'])
    	->where([['user_id','=',$id],['sh_name','=',$request->folder_name],['hide','=',0]])->first();
    	if($check_lock->lock===1){
    			return "This folder is locked";
    	}
    	$child= Folder::where([['user_id','=',$id],['parent_id','=',$request->id],['hide','=',0]])->get();
    	return array('map'=>$check_lock,'folders'=>$child);
    }    
    
}
