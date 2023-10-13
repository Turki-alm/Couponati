<?php
declare(strict_types=1);

namespace App\Controller;
use App\Hellpers\MailForms;
use App\Hellpers\Mail;
use Cake\ORM\TableRegistry;

/**
 * Requests Controller
 *
 * @property \App\Model\Table\RequestsTable $Requests
 * @method \App\Model\Entity\Request[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RequestsController extends AppController
{


    public function initialize(): void
    {
        parent::initialize();


        $this->Authentication->allowUnauthenticated(['add']);

    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $this->paginate = ['order' =>['Requests.id'=>'DESC'] ,'limit' =>6];
        $requests = $this->paginate($this->Requests);

        $this->set(compact('requests'));
    }

  

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    $this->viewBuilder()->setLayout('website');


        //get admin mail
        $getAdminMail = TableRegistry::getTableLocator()->get('Users')->find()->first()->email;
       
        $request = $this->Requests->newEmptyEntity();
        if ($this->request->is('post')) {
            $request = $this->Requests->patchEntity($request, $this->request->getData());
            if ($this->Requests->save($request)) {
                $this->Flash->success(__('شكراً لإرسال طلب الانضمام  , سيتم مراجعة الطلب والتواصل معكم فى أقرب وقت'));
                //send mail by gmail
                $mailBody = MailForms::sendRequest($this->request->getData());
                $mail = Mail::sendMail([
                        "from"=>$this->request->getData("full_name"),"fromMail"=>$this->request->getData("email"),
                        "to"=>"Couponati","toMail"=>$getAdminMail,
                        "subject"=>"طلب انضمام جديد" ,"mailBody"=>$mailBody
                ]);
                return $this->redirect(URL);
            }
            $this->Flash->error(__('لم يتم الارسال , برجاء المحاولة فى وقت لاحق'));
        }
        $this->set(compact('request'));
    }

   
    /**
     * Delete method
     *
     * @param string|null $id Request id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $request = $this->Requests->get($id);
        if ($this->Requests->delete($request)) {
            $this->Flash->success(__('The request has been deleted.'));
        } else {
            $this->Flash->error(__('The request could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
