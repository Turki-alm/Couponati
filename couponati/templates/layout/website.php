
<?= $this->element('website/header') ?>
<!----Flash MSGS--->
<?= $this->Html->css(['cake']) ?>
<?= $this->Flash->render() ?>
<!----Flash MSGS--->
<?= $this->fetch('content') ?>
<?= $this->element('website/footer') ?>