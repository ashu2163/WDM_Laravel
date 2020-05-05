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
                                                                            'VideoDescription'=>$request->input('videodescription'),
                                                                            'VideoUrl'=>'proyect_1/'.$originalname,
                                                                            'Date' => $request->input('date')]);
            return redirect()->route('adminvideo.index')->with('info','Video Updated Successfully');
        }
        else{
            $video = videos::where( 'VideoID',$request->input('videoid'))->update(['VideoType'=>$request->input('videotype'),
                                                                            'VideoDescription'=>$request->input('videodescription'),
                                                                            'VideoUrl'=>'',
                                                                            'Date' => $request->input('date')]);
            return redirect()->route('adminvideo.index')->with('info','Video Updated Successfully');
        }
    }

    public function store(Request $request)
    {
        //Persist the employee in the database
        //form data is available in the request object
        if($request->session()->has('UserID')) {
            $UserID = $request->session()->get('UserID');
            $video = new videos();

            $videofile = $request->file('invideofile');
            if ($videofile != '') {
//                $validator = Validator::make($request->all(), [
//                    'videofile' => 'mimetypes:video/avi,video/mpeg,video/quicktime| max: 20000'
//                ]);
                $video_name = rand() . '.' . $videofile->getClientOriginalExtension();
                $originalname = $videofile->getClientOriginalName();
                $path = $videofile->move(public_path('proyect_1'), $originalname);

                $video->VideoType = $request->input('invideotype');
                $video->UserID = $UserID;
                $video->VideoUrl = 'proyect_1/' . $originalname;
                $video->VideoDescription = $request->input('invideodescription');
                $video->Date = $request->input('indate');
                $video->save();

                return redirect()->route('adminvideo.index')->with('info', 'Video Added Successfully');
            } else {
                $video->VideoType = $request->input('invideotype');
                $video->UserID = $UserID;
                $video->VideoUrl = '';
                $video->VideoDescription = $request->input('invideodescription');
                $video->Date = $request->input('indate');
                $video->save();

                return redirect()->route('adminvideo.index')->with('info', 'Video Added Successfully');
            }
        }else {
            echo $this->not_login();
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
