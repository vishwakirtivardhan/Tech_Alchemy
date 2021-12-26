<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Validator;
class bookController extends Controller
{
    
    // Get the All the Books Function
    protected function getBooksList(){
        $list = Book::get()->toArray();
        if(count($list)>0){
            return $list;
        }else{
            return 'No Data Found';
        }
    }

    // Single Book Details By UUid
    protected function getbookdetals(Request $res){
        if(isset($res['uuid'])){
        $list = Book::where('uuid',$res['uuid'])->get()->toArray();
        if(count($list)>0){
            return $list;
        }else{
            return 'No Data Found';
        }
         }else {
        return 'Book Id Missing';
        }
    }

    // Add the add New Book 
    protected function addBook(Request $res){
        //die('chehc');
        $data = $res->all();
        $rules = array('name'=>'required | max:50',
                    'release_date'=>'required | date_format:Y-m-d H:i:s',
                    'author_name'=>'required | max:50',
                    );
        $validator = Validator::make($data, $rules);
         if ($validator->fails()) {
            return json_encode(array('status'=>'failed','response'=>'Validation Error!','errors'=>$validator->errors()));exit;
        }else{  
        
           $result = book::insert(['name'=>$data['name'],'release_date'=>$data['release_date'],'author_name'=>$data['author_name'],'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')]);
           if($result==1){
            return 'Success!';
           } else{
               return "Failed:::Connect with Tech Team";
           }
        }
    }

    // Update Book Details based on Id(UUID)
    protected function bookUpdate($id,Request $res){
        
        $fields= array('name','release_date','author_name'); // Field which we need to update           
        $data = array_intersect_key($res->all(),array_flip($fields)); // Remove unwanted fied if inserted.
        // Vaildation & Check
        $rules = array(
                    'name'=>'max:50',
                    'release_date'=>'date_format:Y-m-d H:i:s',
                    'author_name'=>'max:50',
                    );
        $validator = Validator::make($data, $rules);
         if ($validator->fails()) {
            return json_encode(array('status'=>'failed','response'=>'Validation Error!','errors'=>$validator->errors()));exit;
        }else{  
           // Laravel Eloquent here (Query)
           $result = book::where('uuid',$id)->update($data,['updated_at'=>date('Y-m-d H:i:s')]);
           if($result==1){
            return 'Successfully Updated!';
           } else{
               return "Failed:::Connect with Tech Team";
           }
        }


    }
    // Delete Book by UUID.
    protected function deleteBook($id){
        $result = book::where('uuid',$id)->delete();
        if($result==1){
            return 'Data Deleted!';
           } else{
               return "Failed:::Connect with Tech Team. Something Wrong going on.";
           }

    }

}