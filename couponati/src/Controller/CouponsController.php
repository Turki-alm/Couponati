<?php
declare(strict_types=1);

namespace App\Controller;
use App\Hellpers\UploadFile;
/**
 * Coupons Controller
 *
 * @property \App\Model\Table\CouponsTable $Coupons
 * @method \App\Model\Entity\Coupon[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CouponsController extends AppController
{

    function getMoreCoupons(){
        $this->viewBuilder()->enableAutoLayout(false);
        $page = $this->request->getData("page");

        $this->paginate =  [ "page"=> $page ,'order' =>['Coupons.id'=>'DESC'] ,'limit' =>8];
        $coupons = $this->paginate($this->Coupons);

        $this->set(compact('coupons'));
    }
    function getCoupon(){
       $this->viewBuilder()->enableAutoLayout(false);
        $couponID = $this->request->getData("copounID");

        $getCouponById = $this->Coupons->findById($couponID?$couponID:0)->first();
        $this->set(compact('getCouponById'));
    }

    function home(){
        //  $this->viewBuilder()->enableAutoLayout(false);
        $this->viewBuilder()->setLayout('website');
        if($_GET):
            $this->paginate =  $this->filterWithCondition($_GET);
            else :  $this->paginate =  ['order' =>['Coupons.id'=>'DESC'] ,'limit' =>8];
        endif;
        
        $coupons = $this->paginate($this->Coupons);
        $categories = $this->Coupons->Categories->find()->toArray();
        $this->set(compact('coupons','categories'));
    }

    function filterWithCondition($params){
      $filter  = [
        'conditions'=> [
            $params["code"] ? ['Coupons.coupon LIKE'=> "%".$params["code"]."%"] :[],
            $params["category"] ? ['Coupons.category_id'=> $params["category"]] :[],
            ] ,
        'order' =>['Coupons.id'=>'DESC'] ,'limit' =>8
    ];
      return $filter ; 
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = ['order' =>['Coupons.id'=>'DESC'] ,'limit' =>6];
        $coupons = $this->paginate($this->Coupons);
        
        $this->set(compact('coupons'));
    }

    /**
     * View method
     *
     * @param string|null $id Coupon id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coupon = $this->Coupons->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('coupon'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coupon = $this->Coupons->newEmptyEntity();
        if ($this->request->is('post')) {
            $coupon = $this->Coupons->patchEntity($coupon, $this->request->getData());
            
            $uploadFile = UploadFile::uploadSinglePhoto(["photoName"=>"logo" , "path"=>"library/coupons"]);
            if($uploadFile["success"] == true):
                $coupon->logo = $uploadFile["name"]; 
                else :  
                    $this->Flash->error(__($uploadFile["msg"]));
            endif;

          
            if ($this->Coupons->save($coupon)) {
                $this->Flash->success(__('تم الحفظ بنجاح'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('لم يتم الحفظ , برجاء التأكد من البيانات'));
        }
        $categories = $this->Coupons->Categories->find('list',['feildValue'=>'name']);
        $this->set(compact('coupon','categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coupon id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coupon = $this->Coupons->get($id, [
            'contain' => [],
        ]);
        $oldLogo = $coupon->logo ; 

        if ($this->request->is(['patch', 'post', 'put'])) {
            $coupon = $this->Coupons->patchEntity($coupon, $this->request->getData());

            $uploadFile = UploadFile::uploadSinglePhoto(["photoName"=>"logo" , "path"=>"library/coupons"]);
            if($uploadFile["success"] == true):
                $coupon->logo = $uploadFile["name"]; 
                else :  
                  $coupon->logo = $oldLogo; 
            endif;

            if ($this->Coupons->save($coupon)) {
                $this->Flash->success(__('تم الحفظ بنجاح'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('لم يتم الحفظ , برجاء التأكد من البيانات'));
        }
        $categories = $this->Coupons->Categories->find('list',['feildValue'=>'name']);
        $this->set(compact('coupon','categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coupon id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coupon = $this->Coupons->get($id);
        if ($this->Coupons->delete($coupon)) {
            $this->Flash->success(__('تم الحذف بنجاح'));
        } else {
            $this->Flash->error(__('لم يتم الحذف , برجاء التأكد من البيانات'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
