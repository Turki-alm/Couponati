<!DOCTYPE html style="padding: 0px; margin: 0px; color-scheme: light; --vh:25.5px;">
<html>
<head>
    <?= $this->Html->charset() ?>

    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <span> <a href="<?=URL?>"><img src="<?=URL.'img/logo.png'?>" width="100" height="100"></a></span>
        </div>
    <?php if($auth->id):?>
            <aside class="column">
                <div class="side-nav">

                    <a href="<?=URL?>categories" class="button" style="color:yellow !important">
                    التصنيفات
                    </a>
                    <a href="<?=URL?>coupons" class="button" style="color:orange !important">
                    كوبونات الخصم
                    </a>
                    <a href="<?=URL?>requests" class="button" style="color:black !important">
                    طلبات المتاجر 
                    </a>
                    <?= $this->Html->link(__('تسجيل الخروج'), ["controller"=>"Users",'action' => 'logout'], ['class' => 'button' , "style"=>"background:red;border-color:white" ]) ?>
                </div>
            </aside>
        <?php endif;?>
        

        <link href="<?=URL?>css/bootstrap532.css" rel="stylesheet">
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
        <script src="<?=URL?>js/bootstrap532.js"></script>
    </footer>
</body>
</html>
<style>

    html , body {direction: rtl;}
    .col-sm-6 , .col-sm-5,  .col-sm-4, .col-sm-3, .col-sm-8, .col-sm-7{float:right;padding:10px}
    body , a ,h1 , h2 , h3 , h4{    font-family: "Cairo";}
    body {   background: #00000059;}
    label , input , select {    font-size: 1.5rem;}
    legend{    font-size: 2rem;    text-align: center;border: 1px dotted;padding: 10px;}
    tr , td {text-align: center;    border: 1px solid #ddd;}

    @font-face {
                font-family: 'Cairo';
                src: url('<?=URL?>website/fonts/Cairo-VariableFont_slnt,wght.ttf');
            }
    .button , button {color:white !important ; background:#606c76 ; border-color:gold}
    .btn {color : white !important ; width : 100% ; margin:2px}
    th >a {    color: #4c7efd  !important;}
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



