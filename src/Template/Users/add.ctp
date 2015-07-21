<!-- File: src/Template/Users/add.ctp -->

<br/>
<div class="actions columns large-2 medium-6">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-6 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('role', array(
			      	'options' => array('User' => 'User', 'Manager' => 'Manager', 'Admin' => 'Admin')
				    ));
        ?>
    </fieldset>
    <br/>
    <?= $this->Form->button(__('Add User'), ['class' => 'button radius small success']); ?>
    <?= $this->Form->end() ?>
</div>
