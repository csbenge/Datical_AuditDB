<!-- File: src/Template/Operations/view.ctp -->

<h3><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> <?= h($operation->PROJECT_NAME) ?>:<?= h($operation->STEP) ?> - <?= h($operation->OPDATE) ?></h3>

<div class="row">
    <div class="col-md-2">
        <div class="panel panel-primary">
        <div class="panel-heading"><strong>PROJECT</strong></div>
        <div class="panel-body">
            <table class="table table-hover table-condensed">
            <tr>
                <td><strong><?= __('NAME') ?>:</strong></td>
                <td><?= h($operation->PROJECT_NAME) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('STEP') ?>:</strong></td>
                <td><?= h($operation->STEP) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('ACTION') ?>:</strong></td>
                <td><?= h($operation->ACTION_TYPE) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('LABELS') ?>:</strong></td>
                <td><?= h($operation->LABELS) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('CONTEXTS') ?>:</strong></td>
                <td><?= h($operation->CONTEXTS) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('RESULT') ?>:</strong></td>
                <td><?= h($operation->DEPLOY_RESULT) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('TYPE') ?>:</strong></td>
                <td><?= h($operation->DEPLOYMODE) ?></td>
            </tr>
            </table>
        </div> 
        </div>
    </div>

    <div class="col-md-2">
        <div class="panel panel-danger">
        <div class="panel-heading"><strong>RESULTS</strong></div>
        <div class="panel-body">
            <table class="table table-hover table-condensed">
            <tr>
                <td><strong><?= __('CHANGES_MADE') ?>:</strong></td>
                <td><?= $this->Number->format($operation->TOTALROWSTOUCHED) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('ROWS TOUCHED') ?>:</strong></td>
                <td><?= $this->Number->format($operation->TOTALROWSTOUCHED) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('VALUES DELETED') ?>:</strong></td>
                <td><?= $this->Number->format($operation->TOTALVALUESDELETED) ?></td>
            </tr>
            </table>
        </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="panel panel-success">
        <div class="panel-heading"><strong>TIME</strong></div>
        <div class="panel-body">
            <table class="table table-hover table-condensed">
            <tr>
                <td><strong><?= __('DATE') ?>:</strong></td>
                <td><?= h($operation->OPDATE) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('START TIME') ?>:</strong></td>
                <td><?= h($operation->STARTTIME) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('STOP TIME') ?>:</strong></td>
                <td><?= h($operation->STOPTIME) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('TOTAL TIME') ?>:</strong></td>
                <td><?= h($operation->TOTALTIME) ?></td>
            </tr>
            </table>
        </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="panel panel-info">
        <div class="panel-heading"><strong>CLIENT</strong></div>
        <div class="panel-body">
            <table class="table table-hover table-condensed">
            <?php foreach ($operation->client_details as $client_details): ?>
            <tr>
                <td><strong><?= __('USER') ?>:</strong></td>
                <td><?= h($client_details->CLIENT_USER) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('ROLE') ?>:</strong></td>
                <td><?= h($client_details->CLIENT_ROLE) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('HOST') ?>:</strong></td>
                <td><?= h($client_details->CLIENT_HOSTNAME) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('IP') ?>:</strong></td>
                <td><?= h($client_details->CLIENT_IP) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('TYPE') ?>:</strong></td>
                <td><?= h($client_details->CLIENT_TYPE) ?></td>
            </tr>
            <?php endforeach; ?>
            </table>
        </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="panel panel-warning">
        <div class="panel-heading"><strong>DATABASE</strong></div>
        <div class="panel-body">
            <table class="table table-hover table-condensed">
            <?php foreach ($operation->opdatabases as $operations): ?>
            <tr>
                <td><strong><?= __('VENDOR') ?>:</strong></td>
                <td><?= h($operations->VENDOR) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('ENGINE') ?>:</strong></td>
                <td><?= h($operations->ENGINE) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('DBNAME') ?>:</strong></td>
                <td><?= h($operations->DBNAME) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('USERNAME') ?>:</strong></td>
                <td><?= h($operations->USERNAME) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('HOST') ?>:</strong></td>
                <td><?= h($operations->HOST) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('PORT') ?>:</strong></td>
                <td><?= h($operations->PORT) ?></td>
            </tr>
            <tr>
                <td><strong><?= __('LAST_DEPLOY') ?>:</strong></td>
                <td><?= h($operations->LAST_DEPLOY) ?></td>
            </tr>
            <?php endforeach; ?>
            </table>
        </div>
        </div>
    </div>

</div>

<!-- CHANGESET DETAILS: CHANGESET DETAILS-->

<div class="row">
<div class="col-md-12">
    <div class="panel panel-primary">
    <div class="panel-heading"><strong><?= __('ChangeSet(s) Details') ?></strong></div>
    <div class="panel-body">
    <?php if (!empty($operation->changeset_details)): ?>
    <table class="table table-striped table-bordered table-hover table-condensed table-responsive">
        <tr>
            <th><?= __('CHANGESET_ID') ?></th>
            <th><?= __('AUTHOR') ?></th>
            <th><?= __('AUTHOR') ?></th>
            <th><?= __('LABELS') ?></th>
            <th><?= __('CONTEXTS') ?></th>
            <th><?= __('RESULT') ?></th>
        </tr>
        <?php foreach ($operation->changeset_details as $changeset_details): ?>
        <tr>
            <td><?= $this->Html->link(__($changeset_details->CHANGEID), ['controller' => 'ChangesetDetails', 'action' => 'view', $changeset_details->ID]) ?></td>
            <td><?= h($changeset_details->AUTHOR) ?></td>
            <td><?= h($changeset_details->AUTHOR) ?></td>
            <td><?= h($changeset_details->LABELS) ?></td>
            <td><?= h($changeset_details->CONTEXTS) ?></td>
            <td><?= h($changeset_details->RESULT) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
    </div>
</div>
