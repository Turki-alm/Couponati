<div class="users form content" style="min-height: 570px;">
    <?= $this->Form->create($login , ['style'=>'    box-shadow: 0px 2px 6px 2px #8888885c;'])?>
   <div class="contanier">
    <div class="row">
            <legend><?= __('استعادة كلمة المرور') ?></legend>
            <div class="form-group col-sm-12">
            <br>
                <div class=" col-sm-6"> <label for="exampleInputEmail1">البريد الاكترونى</label></div>
                <div class=" col-sm-6"> <input type="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required></div>
            </div>
    </div>
   </div>

    <br>
    <div class="form-group"> <div class=" col-sm-12">  <button class="btn btn-primary ">ارسال  </button></div>  </div>

    <?= $this->Form->end() ?>
</div>

<style>
    form{    padding: 20px;margin: 20px;}
</style>


