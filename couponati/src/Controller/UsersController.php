<?php
declare(strict_types=1);

namespace App\Controller;
use App\Hellpers\MailForms;
use App\Hellpers\Mail;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    function recoveryPassword(){
        $this->viewBuilder()->setLayout('website');
       
        if($this->request->is("post") ){
            $email = $this->request->getData("email");
            $checkEmailExist = $this->Users->findByEmail($email)->first();
            if($checkEmailExist){
                //change password 
                $newPassword = "couponati_".rand(999,99999);
                $this->changePassword(["query"=>$checkEmailExist,"newPassword"=>$newPassword]);
                //send mail 
                $this->Flash->success(__('تم ارسال كلمة المرور الجديدة على البريد الالكترونى'));
                //send mail by gmail
                $mailBody = MailForms::recoveryMailForm(["newPassword"=>$newPassword, "email"=>$checkEmailExist->email]);
                $mail = Mail::sendMail([
                        "from"=>"Couponati","fromMail"=>"hm821897@gmail.com" ,
                        "to"=>$checkEmailExist["full_name"],"toMail"=>$checkEmailExist["email"],
                        "subject"=>"طلب استرجاع الحساب" ,"mailBody"=>$mailBody
                ]);
                return $this->redirect(URL);
            }else{
                $this->Flash->error(__('البريد الالكترونى غير صحيح'));
            }
        }
    }
    //////////////
    function changePassword($arr){
        $arr["query"]->password = $arr["newPassword"];
        $this->Users->save($arr["query"]);
    }
    //////////////
    public function login()
{
    $this->viewBuilder()->setLayout('website');
    $result = $this->Authentication->getResult();
   
 
    // If the user is logged in send them away.
    if ($result->isValid()) {
        $auth = $this->Authentication->getIdentity() ;

        if($auth->is_active == "inactive") return $this->Flash->error('account not active'); 

        $target = $this->Authentication->getLoginRedirect() ?? '/';
        return $this->redirect($target);
    }
    if ($this->request->is('post')) {
        $this->Flash->error('بيانات الدخول غير صحيحة');
    }
}
// in src/Controller/UsersController.php
public function logout()
{
    $this->Authentication->logout();
    return $this->redirect(['controller' => 'Users', 'action' => 'login']);
}
   




 
}
