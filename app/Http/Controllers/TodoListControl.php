<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\Request;

class TodoListControl extends Controller
{

    public function index(){
        return view('welcome', ["listItems"=>ListItem::where("is_complete",0)->get()]);

    }

    public function markDone($id){
        $listItem=ListItem::find($id);
        $listItem->is_complete=1;
        $listItem->save();

        // dd($listItem);

        return redirect('/');
    }

    public function saveItem(Request $request){
        // dd($request);

        $newListItem=new ListItem;

        $newListItem->name=$request->listItem;
        $newListItem->is_complete=0;
        $newListItem->save();

        return redirect('/');

    }


}
