<div class="users form content" style="min-height: 570px;">
    <?= $this->Form->create($login , ['style'=>'    box-shadow: 0px 2px 6px 2px #8888885c;'])?>
   <div class="contanier">
    <div class="row">
            <legend><?= __('الدخول') ?></legend>
            <div class="form-group col-sm-12">
                <div class=" col-sm-6"> <label for="exampleInputEmail1">البريد الاكترونى</label></div>
                <div class=" col-sm-6"> <input type="email"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"></div>
            </div>
            <div class="form-group col-sm-12">
                <div class=" col-sm-6"> <label for="exampleInputPassword">كلمة المرور</label></div>
                <div class=" col-sm-6"> <input type="password" class="form-control" id="exampleInputPassword" aria-describedby="emailHelp" name="password"></div>
            </div>
            <div class="form-group col-sm-12">
                <div class=" col-sm-6" style="    margin-top: 10px;"> <a style="    text-decoration: none;color: #481aa0 !important;" href="<?=URL?>users/recoveryPassword"> ! هل نسيت كلمة المرور</a></div>
            </div>
    </div>
   </div>

    <br>
    <input type="hidden" value="<?=$this->request->getAttribute('csrfToken')?>" name="_csrfToken">
    <div class="form-group"> <div class=" col-sm-12">  <button class="btn btn-primary ">تسجيل الدخول</button></div>  </div>
    <!-- <div class=" col-sm-6" style="    margin-top: 10px;">  مستخدم جديد  <a style="    text-decoration: none;color: #481aa0 !important;" href="#"> سجل الآن  </a>  </div> -->

    <?= $this->Form->end() ?>
</div>

<style>
    form{    padding: 20px;margin: 20px;}
</style>


