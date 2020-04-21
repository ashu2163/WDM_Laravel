<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\events;

class adminEventController extends Controller
{
    public function index()
    {
        //$projs=project::all()->toArray();
        $projs= events::select('*')->where('UserID','=','1')->get();
        return view('adminevent.index',compact('projs'));
    }

    public function create()
    {
        //Return view to create employee
        return view('admineventcreate');
    }

    public function update(Request $request)
    {
        //Retrieve the employee and update
        //$target_dir="proyect_1/";
        $imgfile=$request->file('eventimgfile');
        if($imgfile!=''){
            $request->validate([
                'imgfile' => 'image|max:2048'
            ]);

            $image_name=rand(). '.' . $imgfile->getClientOriginalExtension();
            echo $image_name;
            $originalname = $imgfile->getClientOriginalName();
            echo $originalname;
            $path=$imgfile->move(public_path('proyect_1'),$originalname);
            echo $path;
            $proj = events::where( 'EventID',$request->input('eventid'))->update(['EventType'=>$request->input('eventtype'), 
                                                                            'EventDescription'=>$request->input('eventdescription'),
                                                                            'EventUrl'=>'proyect_1/'.$originalname,
                                                                            'Date' => $request->input('date')]);
            return redirect()->route('adminevent.index')->with('info','Event Updated Successfully');
        }
        else{
            $proj = events::where( 'EventID',$request->input('id'))->update(['EventType'=>$request->input('eventtype'), 
                                                                            'EventDescription'=>$request->input('eventdescription'),
                                                                            'Date' => $request->input('date')]);
            return redirect()->route('adminproject.index')->with('info','Event Updated Successfully');
        }
    }

    public function store(Request $request)
    {
        //Persist the employee in the database
        //form data is available in the request object
        $event = new events();
        
        $imgfile=$request->file('ineventimgfile');
        if($imgfile!=''){
            $request->validate([
                'inimgfile' => 'image|max:2048'
            ]);

            $image_name=rand(). '.' . $imgfile->getClientOriginalExtension();
            $originalname = $imgfile->getClientOriginalName();
            $path=$imgfile->move(public_path('proyect_1'),$originalname);

            $event->EventType = $request->input('ineventtype');
            $event->UserID = '1';
            $event->EventUrl='proyect_1/'.$originalname;
            $event->EventDescription = $request->input('ineventdescription');
            $event->Date = $request->input('indate');
            $event->save(); 
        
            return redirect()->route('adminevent.index')->with('info','Project Added Successfully');
        }
        else{
            $event->EventType = $request->input('ineventtype');
            $event->UserID = '1';
            $event->EventUrl='';
            $event->EventDescription = $request->input('ineventdescription');
            $event->Date = $request->input('indate');
            $event->save(); 
            
            return redirect()->route('adminevent.index')->with('info','Project Added Successfully');
        }
    }


    public function destroy()
    {
        //echo $_POST['projId'];
        //Retrieve the employee
        $events = events::where('EventID',$_POST['eventId']);
        //delete
        $events->delete();
        return redirect()->route('adminevent.index')->with('info','Project Deleted Successfully');
    }

}
