<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\events;

class adminEventController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('UserID')) {
            $role=$request->session()->get('role');
            $UserID = $request->session()->get('UserID');
            $name = $request->session()->get('name');
            //$projs=project::all()->toArray();
            $projs = events::select('*')->where('UserID', '=', $UserID)->get();
            return view('adminevent.index', compact('projs','name','role'));
        }else{
            echo $this->not_login();
        }

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
            $proj = events::where( 'EventID',$request->input('eventid'))->update(['EventType'=>$request->input('eventtype'),
                                                                            'EventDescription'=>$request->input('eventdescription'),
                                                                            'Date' => $request->input('date')]);
            return redirect()->route('adminevent.index')->with('info','Event Updated Successfully');
        }
    }

    public function store(Request $request)
    {
        //Persist the employee in the database
        //form data is available in the request object
        if($request->session()->has('UserID')) {
            $UserID = $request->session()->get('UserID');
            $event = new events();

            $imgfile = $request->file('ineventimgfile');
            if ($imgfile != '') {
                $request->validate([
                    'inimgfile' => 'image|max:2048'
                ]);

                $image_name = rand() . '.' . $imgfile->getClientOriginalExtension();
                $originalname = $imgfile->getClientOriginalName();
                $path = $imgfile->move(public_path('proyect_1'), $originalname);

                $event->EventType = $request->input('ineventtype');
                $event->UserID = $UserID;
                $event->EventUrl = 'proyect_1/' . $originalname;
                $event->EventDescription = $request->input('ineventdescription');
                $event->Date = $request->input('indate');
                $event->save();

                return redirect()->route('adminevent.index')->with('info', 'Event Added Successfully');
            } else {
                $event->EventType = $request->input('ineventtype');
                $event->UserID = $UserID;
                $event->EventUrl = '';
                $event->EventDescription = $request->input('ineventdescription');
                $event->Date = $request->input('indate');
                $event->save();

                return redirect()->route('adminevent.index')->with('info', 'Event Added Successfully');
            }
        }else {
            echo $this->not_login();
        }
    }


    public function destroy()
    {
        //echo $_POST['projId'];
        //Retrieve the employee
        $events = events::where('EventID',$_POST['eventId']);
        //delete
        $events->delete();
        return redirect()->route('adminevent.index')->with('info','Event Deleted Successfully');
    }

    private function not_login(){
        return '<script>
                    alert("please login first");
                    self.location = document.referrer;
                </script>>';
    }

}
