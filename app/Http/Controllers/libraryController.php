<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;
 use App\Models\book;
 use App\Models\sregistration;
 use App\Models\issue;

class libraryController extends Controller
{
    public function __construct(){
        $this->obj=new registration;
       
       
        $this->obj1=new book;
               
           
        $this->obj2=new sregistration;
         $this->obj3=new issue;
     }

     public function adminindex(){
        return view('adminindex');
    }
    
 

    public function login(){
        return view('login');
    }

    public function loginaction(Request $req){

        $email=$req->input('email');

        $password=$req->input('password');
        $data=$this->obj->logindata('registrations',$email,$password);
        if(isset($data)){
            $req->session()->put(array('sess'=>$data->id));
            $id=session('sess');
            
            
            return redirect('/admindashboard');

        }else{
            return redirect('/login')->with('error','invalid details');
        }
}

      public function admindashboard(){
        return view('admindashboard');
    }
    public function addbook(){
        return view('addbook');
    }
     public function bookinsert(Request $req){
         $bookno=$req->input('bookno');
        $name=$req->input('name');
        $auther=$req->input('auther');
         $edition=$req->input('edition');
         $publisher=$req->input('publisher');
        $data=['bookno'=>$bookno,'name'=>$name,'auther'=>$auther,'edition'=>$edition,'publisher'=>$publisher];
        // book::insert($data);
        $this->obj1->insertdata('books',$data);
        return redirect('/viewbook');
        
  } 
    public function viewbook(){
        $data['result']=$this->obj1->bview('books');

        // $data['result']=book::get();

        return view('viewbook',$data);
    }
    public function edit($id){
        $data['result']=$this->obj1->bedit('books',$id);
        // $data['result']=book::where('id',$id)->get();
        return view('edit',$data);
    }

public function editaction(Request $req,$id){
    $bookno=$req->input('bookno');
        $name=$req->input('name');
        $auther=$req->input('auther');
         $edition=$req->input('edition');
         $publisher=$req->input('publisher');
        $data=['bookno'=>$bookno,'name'=>$name,'auther'=>$auther,'edition'=>$edition,'publisher'=>$publisher];
        $this->obj1->editdata('books',$id,$data);
    // book::where('id',$id)->update($data);
    return redirect('/viewbook');
}
public function delete($id){
     $this->obj1->deletedata('books',$id);
    // book::where('id',$id)->delete();
    return redirect('/viewbook');
}
public function studentindex(){
        return view('studentindex');
    }
public function registerstudent(){
        return view('registerstudent');
    }
    public function studentinsert(Request $req){
         $rollno=$req->input('rollno');
        $name=$req->input('name');
         $email=$req->input('email');
          $password=$req->input('password');
        $course=$req->input('course');
        
        $data=['rollno'=>$rollno,'name'=>$name,'course'=>$course,'email'=>$email,'password'=>$password];
        $this->obj2->insertdata('sregistrations',$data);
        // sregistration::insert($data);
        return redirect('/studentdashboard');
        
    } 

public function slogin(){
        return view('slogin');
    }

    public function sloginaction(Request $req){

        $email=$req->input('email');

        $password=$req->input('password');
        $data=$this->obj->logindata('sregistrations',$email,$password);
        if(isset($data)){
            $req->session()->put(array('sess'=>$data->id));
            $id=session('sess');
            
            
            return redirect('/studentdashboard');

        }else{
            return redirect('/slogin')->with('error','invalid details');
        }
}

public function studentdashboard(){
        return view('studentdashboard');
    }

    public function viewstudent(){
        // $data['result']=sregistration::get();
        $data['result']=$this->obj2->sview('sregistrations');
        return view('viewstudent',$data);
    }
    public function sedit($id){
        // $data['result']=sregistration::where('id',$id)->get();
         $data['result']=$this->obj2->sedit('sregistrations',$id);
        return view('sedit',$data);
    }

public function seditaction(Request $req,$id){
    $rollno=$req->input('rollno');
        $name=$req->input('name');
        $course=$req->input('course');
         
        $data=['rollno'=>$rollno,'name'=>$name,'course'=>$course];
    // sregistration::where('id',$id)->update($data);
                $this->obj2->editdata('sregistrations',$id,$data);
    return redirect('/viewstudent');
}
public function sdelete($id){
    // sregistration::where('id',$id)->delete();
    $this->obj2->deletedata('sregistrations',$id);
    return redirect('/viewstudent');
}
        public function issuebook(){
//      $data['student']=sregistration::get();
//         $data['book']=book::get();

        $data['student']=$this->obj3->issuebook('sregistrations');
        $data['book']=$this->obj3->ibook('books');

        

       return view('issuebook',$data);
    }
    public function issuebookinsert(Request $req){
         $sname=$req->input('sname');
          $bookno=$req->input('bookno');
        $name=$req->input('name');
        $auther=$req->input('auther');
         $edition=$req->input('edition');
         $publisher=$req->input('publisher');
         $issuedate=$req->input('issuedate');
         $returndate=$req->input('returndate');
        $data=['sname'=>$sname,'bookno'=>$bookno,'name'=>$name,'auther'=>$auther,'edition'=>$edition,'publisher'=>$publisher,'issuedate'=>$issuedate,'returndate'=>$returndate];
        // issue::insert($data);
         $this->obj3->insertdata('issues',$data);
        return redirect('/viewissue');
    }
    public function viewissue(){
        $data['result']=issue::get();
     // $data['result']=$this->obj3->vissue('issues');
        return view('viewissue',$data);
    }
    public function reissue($id){
          // $newdate=$req->input('newdate');
          // $issuedate=$req->input('issuedate');
          // $olddate=$req->input('returndate');
         $data['result']=$this->obj3->idata('issues',$id); 
       return view('reissue',$data);

        
    }

     public function reissueaction(Request $req,$id){
      $newdate=$req->input('newdate');
      $olddate=$this->obj3->olddate('issues',$id);
       // $returndate=$req->input('issuedate');
       // $olddate=$req->input('returndate');
       $data=['issuedate'=>$olddate,
      'returndate'=>$newdate,
      'status'=>"reissue"];
      

      $this->obj3->ridata('issues',$id,$data);
      return redirect('/viewissue');


    }
   
   
   
    public function return($id){
    $data=['status'=>"return"];
// //     issue::where('id',$id)->update($data);
        $this->obj3->rdata('issues',$id,$data);
       return redirect('/viewissue');
}

public function studentlogout(Request $req){
        $req->session()->forget('ses');
        return redirect('/studentindex');
     }

     public function viewadminbookdtls(){
        $data['result']=issue::get();
     // $data['result']=$this->obj3->vissue('issues');
        return view('viewadminbookdtls',$data);
    }

    public function adminlogout(Request $req){
        $req->session()->forget('ses');
        return redirect('/adminindex');
     }
 

}
