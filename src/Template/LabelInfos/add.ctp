<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Label Infos'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="labelInfos form large-10 medium-9 columns">
    <?= $this->Form->create($labelInfo) ?>
    <fieldset>
        <legend><?= __('Add Label Info') ?></legend>
        <?php
            echo $this->Form->input('METADATA_KEY');
            echo $this->Form->input('METADATA_VALUE');
            echo $this->Form->input('FK_LABELS_ID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
