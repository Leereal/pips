<?php
namespace App\Http\Controllers\Admin;
use DB;
use App\Task;
use App\settings;
use App\Admin;
use App\users;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\NewNotification;
class CrmController extends Controller
{
    //

    public function addtask(Request $request){

        // $this->validate($request, [
        //     'attch' => 'mimes:jpg,jpeg,png|max:500',
        //     ]);
        // if ($request->hasFile('attch')) {
        //     //attachment1
        //     $file1=$request->file('attch');
        //     $upload_dir="../$settings->files_key/cloud/uploads";
        //     $attmt1=$file1->getClientOriginalName();
        //     $move=$file1->move($upload_dir, $attmt1);
        // }
        

        $task=new Task();
        $task->title= $request['tasktitle'];
        $task->note= $request['note'];
        $task->designation= $request['delegation'];
        $task->start_date= $request['start_date'];
        $task->end_date= $request['end_date'];
        $task->priority= $request['priority'];
        $task->status="Pending";
        $task->save();

        $mailduser=Admin::where('id',$request->delegation)->first();
        $settings=settings::where('id', '=', '1')->first();
        //send email notification
        $objDemo = new \stdClass();
        $objDemo->message = "This is to inform you that a new task has been assigned to you, Task Title: $request->tasktitle, Start Date: $request->start_date, End Date: $request->end_date, please login to your account to see more.";
        $objDemo->sender = $settings->site_name;
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject ="New Task";
        //Mail::bcc($mailduser->email)->send(new NewNotification($objDemo));
        
        return redirect()->back()
        ->with('message', 'Task Sucessfully Created and Assigned!');
    }


    public function updatetask(Request $request){

        Task::where('id', $request['id'])
        ->update([
        'title' => $request['tasktitle'],
        'note' => $request['note'],
        'designation' => $request['delegation'],
        'start_date' => $request['start_date'],
        'end_date' => $request['end_date'],
        'priority' => $request['priority'],
        // 'status' => "Pending",
        ]);
        return redirect()->back()
        ->with('message', 'Action Sucessful!');
    }

     //Delete deposit
     public function deltask($id){
        Task::where('id', $id)->delete();
        return redirect()->back()
        ->with('message', 'Task has been deleted!');
    }

      public function markdone($id){
        Task::where('id', $id)
        ->update([
        'status' => "Completed",
        ]);
        return redirect()->back()
        ->with('message', 'Task has been Completed!');
    }

     //Delete deposit
     public function updateuser(Request $request){
        users::where('id', $request->id)
        ->update([
        'userupdate' => $request->userupdate,
        ]);
        return redirect()->back()
        ->with('message', 'Status Updated!');
    }
     //Delete deposit
     public function convert($id){
        users::where('id', $id)
        ->update([
        'cstatus' => "Customer",
        ]);
        return redirect()->back()
        ->with('message', 'User Converted successfully');
    }

    public function assign(Request $request){
        users::where('id', $request['user_name'])
        ->update([
        'assign_to' => $request['admin'],
        ]);
        $mailduser=Admin::where('id',$request->admin)->first();
        $settings=settings::where('id', '=', '1')->first();
        //send email notification
        $objDemo = new \stdClass();
        $objDemo->message = "This is to inform you that a user have been assigned to you, please login to your account for more info";
        $objDemo->sender = $settings->site_name;
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject ="New User Assigned";
        //Mail::bcc($mailduser->email)->send(new NewNotification($objDemo));
        return redirect()->back()
        ->with('message', 'Successfully Assigned User to Admin');
      }
    

}
