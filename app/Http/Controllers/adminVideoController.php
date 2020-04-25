<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\videos;

class adminVideoController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('UserID')) {
            $role=$request->session()->get('role');
            $UserID = $request->session()->get('UserID');
            $name = $request->session()->get('name');
            $video = videos::select('*')->where('UserID', '=', $UserID)->get();
            return view('adminvideo.index', compact('video','name','role'));
        }else{
            echo $this->not_login();
        }
    }
    private function not_login(){
        return '<script>
                    alert("please login first");
                    self.location = document.referrer;
                </script>>';
    }


    public function create()
    {
        //Return view to create employee
        return view('adminvideocreate');
    }

    public function update(Request $request)
    {
        //Retrieve the employee and update
        //$target_dir="proyect_1/";
        $video=$request->file('videoUrl');
        if($video!=''){
            $validator = Validator::make($request->all(), [
                'video' => 'mimetypes:video/avi,video/mpeg,video/quicktime'
            ]);

            $video_name=rand(). '.' . $video->getClientOriginalExtension();
            //echo $image_name;
            $originalname = $video->getClientOriginalName();
            //echo $originalname;
            $path=$video->move(public_path('proyect_1'),$originalname);
            //echo $path;
            $video = videos::where( 'VideoID',$request->input('videoid'))->update(['VideoType'=>$request->input('videotype'),
                                                                            'Description'=>$request->input('videodescription'),
                                                                            'VideoUrl'=>'proyect_1/'.$originalname,
                                                                            'Date' => $request->input('date')]);
            return redirect()->route('adminvideo.index')->with('info','Video Updated Successfully');
        }
        else{
            $video = videos::where( 'VideoID',$request->input('videoid'))->update(['VideoType'=>$request->input('videotype'),
                                                                            'Description'=>$request->input('videodescription'),
                                                                            'VideoUrl'=>'',
                                                                            'Date' => $request->input('date')]);
            return redirect()->route('adminvideo.index')->with('info','Video Updated Successfully');
        }
    }

    public function destroy()
    {
        //echo $_POST['projId'];
        //Retrieve the employee
        $video = videos::where('VideoID',$_POST['videoId']);
        //delete
        $video->delete();
        return redirect()->route('adminvideo.index')->with('info','Video Deleted Successfully');
    }
}
