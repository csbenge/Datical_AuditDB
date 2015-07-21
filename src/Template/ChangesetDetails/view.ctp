<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Changeset Detail'), ['action' => 'edit', $changesetDetail->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Changeset Detail'), ['action' => 'delete', $changesetDetail->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $changesetDetail->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Changeset Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Changeset Detail'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="changesetDetails view large-10 medium-9 columns">
    <h2><?= h($changesetDetail->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('DTYPE') ?></h6>
            <p><?= h($changesetDetail->DTYPE) ?></p>
            <h6 class="subheader"><?= __('CHANGEID') ?></h6>
            <p><?= h($changesetDetail->CHANGEID) ?></p>
            <h6 class="subheader"><?= __('AUTHOR') ?></h6>
            <p><?= h($changesetDetail->AUTHOR) ?></p>
            <h6 class="subheader"><?= __('FILENAME') ?></h6>
            <p><?= h($changesetDetail->FILENAME) ?></p>
            <h6 class="subheader"><?= __('CHECKSUM') ?></h6>
            <p><?= h($changesetDetail->CHECKSUM) ?></p>
            <h6 class="subheader"><?= __('DBMS') ?></h6>
            <p><?= h($changesetDetail->DBMS) ?></p>
            <h6 class="subheader"><?= __('LABELS') ?></h6>
            <p><?= h($changesetDetail->LABELS) ?></p>
            <h6 class="subheader"><?= __('CONTEXTS') ?></h6>
            <p><?= h($changesetDetail->CONTEXTS) ?></p>
            <h6 class="subheader"><?= __('ON VALIDATION FAIL') ?></h6>
            <p><?= h($changesetDetail->ON_VALIDATION_FAIL) ?></p>
            <h6 class="subheader"><?= __('RESULT') ?></h6>
            <p><?= h($changesetDetail->RESULT) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($changesetDetail->ID) ?></p>
            <h6 class="subheader"><?= __('E VERSION') ?></h6>
            <p><?= $this->Number->format($changesetDetail->E_VERSION) ?></p>
            <h6 class="subheader"><?= __('OPERATION CHANGESET ID') ?></h6>
            <p><?= $this->Number->format($changesetDetail->OPERATION_CHANGESET_ID) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('FAIL ON ERROR') ?></h6>
            <?= $this->Text->autoParagraph(h($changesetDetail->FAIL_ON_ERROR)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('ON RUN ALWAYS') ?></h6>
            <?= $this->Text->autoParagraph(h($changesetDetail->ON_RUN_ALWAYS)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('RUN ON CHANGE') ?></h6>
            <?= $this->Text->autoParagraph(h($changesetDetail->RUN_ON_CHANGE)) ?>
        </div>
    </div>
</div>

<table>

        <?php if (!empty($changesetDetail->changeimpacts)): ?>
            <tr>
                <th><?= __('ID') ?></th>
                <th><?= __('AUTHOR') ?></th>
                <th><?= __('CHANGE_DESCRIPTION') ?></th>
            </tr>
        <?php foreach ($changesetDetail->changeimpacts as $changeimpacts): ?>
            <tr>
                <td><?= h($changeimpacts->ID) ?></td>
                <td><?= h($changeimpacts->AUTHOR) ?></td>
                <td><?= h($changeimpacts->CHANGE_DESCRIPTION) ?></td>
            </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        
</table>