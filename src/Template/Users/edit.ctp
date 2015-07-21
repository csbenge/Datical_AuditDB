<!-- File: src/Template/Users/edit.ctp -->

<br/>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <?php
          if ($authUserRole == "Admin") 
          {
            echo "<li>", $this->Form->postLink(__('Delete User'),['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]), "</li>";
            echo "<li>", $this->Html->link(__('List Users'), ['action' => 'index']), "</li>";
            echo "<li>", $this->Html->link(__('New User'), ['action' => 'add']), "</li>";
          }
         ?>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('role');
        ?>
    </fieldset>
    <br/>
    <?= $this->Form->button(__('Save'), ['class' => 'button radius small success']); ?>
    <?= $this->Form->end() ?>
</div>
