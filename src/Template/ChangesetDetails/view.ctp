
<h3><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> <?= h($changesetDetail->DTYPE) ?>: <?= h($changesetDetail->CHANGEID) ?></h3>

<div class="changesetDetails view large-10 medium-9 columns">

    <div class="row">
    <div class="col-md-4">
        <div class="panel panel-primary">
        <div class="panel-heading"><strong>SUMMARY</strong></div>
        <div class="panel-body">
            <table class="table table-hover table-condensed">
            <tr>
                <td><strong><?= __('ID') ?>:</strong></td>
                <td><?= h($changesetDetail->CHANGEID) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('AUTHOR') ?>:</strong></td>
                <td><?= h($changesetDetail->AUTHOR) ?></td>
            </tr>
            
            <tr>
                <td><strong><?= __('DBMS') ?>:</strong></td>
                <td><?= h($changesetDetail->DBMS) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('LABELS') ?>:</strong></td>
                <td><?= h($changesetDetail->LABELS) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('CONTEXTS') ?>:</strong></td>
                <td><?= h($changesetDetail->CONTEXTS) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('CHECKSUM') ?>:</strong></td>
                <td><?= h($changesetDetail->CHECKSUM) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('FILENAME') ?>:</strong></td>
                <td><?= h($changesetDetail->FILENAME) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('RESULT') ?>:</strong></td>
                <td><?= $this->DeployResults->prettyUpResult(h($changesetDetail->RESULT)) ?></td>
            </tr>
            </table>
        </div> 
        </div>
    </div>

    <div class="col-md-3">
        <div class="panel panel-success">
        <div class="panel-heading"><strong>SETTINGS</strong></div>
        <div class="panel-body">
            <table class="table table-hover table-condensed">
            <tr>
                <td><strong><?= __('ID') ?>:</strong></td>
                <td><?= h($changesetDetail->ID) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('E_VERSION') ?>:</strong></td>
                <td><?= h($changesetDetail->E_VERSION) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('OPERATION_CHANGESET_ID') ?>:</strong></td>
                <td><?= h($changesetDetail->OPERATION_CHANGESET_ID) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('ON_VALIDATION_FAIL') ?>:</strong></td>
                <td><?= h($changesetDetail->ON_VALIDATION_FAIL) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('FAIL_ON_ERROR') ?>:</strong></td>
                <td><?= h($changesetDetail->FAIL_ON_ERROR) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('ON_RUN_ALWAYS') ?>:</strong></td>
                <td><?= h($changesetDetail->ON_RUN_ALWAYS) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('RUN_ON_CHANGE') ?>:</strong></td>
                <td><?= h($changesetDetail->RUN_ON_CHANGE) ?></td>
            </tr>
            </table>
        </div> 
        </div>
    </div>
</div>

<div class="row">
<div class="col-md-8">
        <div class="panel panel-info">
        <div class="panel-heading"><strong>CHANGE IMPACT(s)</strong></div>
        <div class="panel-body">

<table class="table table-hover table-condensed">

        <?php if (!empty($changesetDetail->changeimpacts)): ?>
            <tr>
                <th><?= __('ID') ?></th>
                <th><?= __('AUTHOR') ?></th>
                <th><?= __('CHANGE_DESCRIPTION') ?></th>
                <th><?= __('SQL') ?></th>
            </tr>
        <?php foreach ($changesetDetail->changeimpacts as $changeimpacts): ?>
            <tr>
                <td><?= h($changeimpacts->ID) ?></td>
                <td><?= h($changeimpacts->AUTHOR) ?></td>
                <td><?= h($changeimpacts->CHANGE_DESCRIPTION) ?></td>
                <td>
                    <?= $this->Html->link(__('View SQL'), ['controller' => 'ChangeimpactsSqls', 'action' => 'view', $changeimpacts->ID]) ?>
                </td>
            </tr>
            </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        
</table>

</div>
</div>
</div>
</div>