<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\project;

class adminProjectController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('UserID')) {
            $role=$request->session()->get('role');
            $UserID = $request->session()->get('UserID');
            $name = $request->session()->get('name');

            $projs = project::select('*')->where('UserID', '=', $UserID)->get();
            return view('adminproject.index', compact('projs','name','role'));
        }else{
            echo $this->not_login();
        }
    }



    public function create()
    {
        //Return view to create employee
        return view('adminproject.create');
    }

    public function update(Request $request)
    {
        //Retrieve the employee and update
        //$target_dir="proyect_1/";
        $imgfile=$request->file('imgfile');
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
            $proj = project::where( 'ProjectID',$request->input('id'))->update(['ProjectName'=>$request->input('projectname'),
                                                                            'ProjectDescription'=>$request->input('projdesc'),
                                                                            'imgUrl'=>'proyect_1/'.$originalname,
                                                                            'Date' => $request->input('date')]);
            return redirect()->route('adminproject.index')->with('info','Project Updated Successfully');
        }
        else{
            $proj = project::where( 'ProjectID',$request->input('id'))->update(['ProjectName'=>$request->input('projectname'),
                                                                            'ProjectDescription'=>$request->input('projdesc'),
                                                                            'Date' => $request->input('date')]);
            return redirect()->route('adminproject.index')->with('info','Project Updated Successfully');
        }
    }

    public function store(Request $request)
    {
        //Persist the employee in the database
        //form data is available in the request object
          if($request->session()->has('UserID')) {
              $UserID = $request->session()->get('UserID');
              $project = new project();

              $imgfile = $request->file('inimgfile');
              if ($imgfile != '') {
                  $request->validate([
                      'inimgfile' => 'image|max:2048'
                  ]);

                  $image_name = rand() . '.' . $imgfile->getClientOriginalExtension();
                  $originalname = $imgfile->getClientOriginalName();
                  $path = $imgfile->move(public_path('proyect_1'), $originalname);

                  $project->ProjectName = $request->input('projectname');
                  $project->UserID = $UserID;
                  $project->imgUrl = 'proyect_1/' . $originalname;
                  $project->ProjectDescription = $request->input('projdesc');
                  $project->Date = $request->input('indate');
                  $project->save();

                  return redirect()->route('adminproject.index')->with('info', 'Project Added Successfully');
              } else {
                  $project->ProjectName = $request->input('projectname');
                  $project->UserID = $UserID;
                  $project->imgUrl = '';
                  $project->ProjectDescription = $request->input('projdesc');
                  $project->Date = $request->input('indate');
                  $project->save();

                  return redirect()->route('adminproject.index')->with('info', 'Project Added Successfully');
              }
          }else{
              echo $this->not_login();
          }
    }


    public function destroy()
    {
        //echo $_POST['projId'];
        //Retrieve the employee
        $project = project::where('ProjectID',$_POST['projId']);
        //delete
        $project->delete();
        return redirect()->route('adminproject.index');
    }

    private function not_login(){
        return '<script>
                    alert("please login first");
                    self.location = document.referrer;
                </script>>';
    }
    // public function edit($id)
    // {
    //     //Find the employee
    //     $employee = Employee::find($id);
    //     return view('employee.edit',['employee'=> $employee]);
    // }



}
?>
