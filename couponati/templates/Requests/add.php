<div class="users form content" style="min-height: 570px;">
    <?= $this->Form->create($login , ['style'=>'    box-shadow: 0px 2px 6px 2px #8888885c;'])?>
   <div class="contanier">
    <div class="row">
            <div class="form-group col-sm-12">
                <div class=" col-sm-6"> <label for="exampleInputEmail1">الاسم بالكامل </label></div>
                <div class=" col-sm-6 mt-2"> <input type="text"  class="form-control" required name="full_name"></div>
            </div>
            <div class="form-group col-sm-12 mt-2">
                <div class=" col-sm-6"> <label for="exampleInputEmail1">البريد الاكترونى</label></div>
                <div class=" col-sm-6 mt-2"> <input type="email"  class="form-control" required name="email"></div>
            </div>
            <div class="form-group col-sm-12 mt-2">
                <div class=" col-sm-6"> <label for="exampleInputEmail1">رقم الهاتف</label></div>
                <div class=" col-sm-6 mt-2"> <input type="text"  class="form-control" required name="phone"></div>
            </div>
            <div class="form-group col-sm-12 mt-2">
                <div class=" col-sm-6"> <label for="exampleInputEmail1"> رابط المتجر</label></div>
                <div class=" col-sm-6 mt-2"> <input type="text"  class="form-control" required name="website"></div>
            </div>
            <div class="form-group col-sm-12 mt-2">
                <div class=" col-sm-6"> <label >اسم العلامة التجارية</label></div>
                <div class=" col-sm-6 mt-2"> <input type="text"class="form-control" required   name="trade_mark"></div>
            </div>
            <div class="form-group col-sm-12 mt-2">
                <div class=" col-sm-6"> <label >متوسط عدد الطلبات شهرياً</label></div>
                <div class=" col-sm-6 mt-2"> <input type="number"class="form-control" required   name="monthly_orders_average"></div>
            </div>
            <div class="form-group col-sm-12 mt-2">
                <div class=" col-sm-6"> <label >متوسط سلة المشتريات </label></div>
                <div class=" col-sm-6 mt-2"> <input type="number"class="form-control" required   name="purchases_average"></div>
            </div>
    </div>
   </div>

    <br>
    <div class="form-group"> <div class=" col-sm-12">  <button class="btn btn-primary ">  إرسال  </button></div>  </div>

    <?= $this->Form->end() ?>
</div>

<style>
    form{    padding: 20px;margin: 20px;}
</style>
