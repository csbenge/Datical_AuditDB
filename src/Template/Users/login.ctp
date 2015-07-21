<!-- File: src/Template/Users/login.ctp -->

<br/>
<div class="row">
  <div class="large-4 columns large-centered">
	
	<?= $this->Form->create() ?>
	    <fieldset>
	        <legend><?= __('Login') ?></legend>
	        <?= $this->Form->input('email') ?>
	        <?= $this->Form->input('password') ?>
	    </fieldset>
	<br/>
	<?= $this->Form->button(__('Login'), ['class' => 'button radius small success']); ?>
	<?= $this->Form->end() ?>
  </div>
</div>
