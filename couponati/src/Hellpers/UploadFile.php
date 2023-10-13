<?php
namespace App\Hellpers;

class UploadFile {
    
   static function uploadSinglePhoto ($photoParamD ){
        if($_SERVER['REQUEST_METHOD'] == 'POST' && $_FILES[$photoParamD['photoName']]['name'] != null):
            $fileName    = $_FILES[$photoParamD['photoName']]['name'] ;
            $fileSize    = $_FILES[$photoParamD['photoName']]['size'] ;
            $fileTmpName = $_FILES[$photoParamD['photoName']]['tmp_name'] ;
            $fileType    = $_FILES[$photoParamD['photoName']]['type'] ;
            // Allowed Extention
            $code = 404 ;
            $allowedExtenation = array('jpg','png' ,'PNG','jpeg');
            $imgExtension      = end(explode('.' , $fileName));
            if(in_array($imgExtension , $allowedExtenation)):  //chk extentaion
                if($fileSize < 10000000): //chk size
                    $image = 'coupunati'.rand(1000,1000000).'.'.$imgExtension ;
                    move_uploaded_file( $fileTmpName,  WWW_ROOT.$photoParamD['path'].'/'.$image);
                    $returnIMG = $photoParamD['path'].'/'.$image ;
                    $imgProb   = "تم رفع الصور بنجاح " ;
                    $success   = true ; $code = 200 ;
                else: $imgProb = "مساحة الصورة اكبر من 10ميجابايت";$success = false ;
                endif;
            else: $imgProb = "امتداد الصور المسموح بها jpg - jpeg - png " ;$success = false ;
            endif;
        else: $imgProb = "برجاء ادخال الصور";  $success = false ;
        endif;
    return ["name"=> $returnIMG ,"msg"=> $imgProb , "success"=>$success ,'code'=>$code ];
    }

 
      
}

