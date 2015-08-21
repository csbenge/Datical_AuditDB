<!-- File: src/Template/messages/index.ctp -->

<div class="col-md-10 main">
  <h2 class="page-header"><i class="fa fa-fw fa-exclamation-triangle"></i>Messages <small> All</small></h2>

<div class="col-md-12 main">
<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-exclamation-triangle fa-fw"></i> Messages</h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">

          <?php if (!($messages->isEmpty())) { ?>
          <table class="table table-striped table-bordered table-hover table-condensed">
          <thead>
            <tr>
              <th><?= $this->Paginator->sort('PROJECT') ?></th>
              <th><?= $this->Paginator->sort('STEP') ?></th>
                <th><?= $this->Paginator->sort('CHANGE_DESCRIPTION') ?></th>
              <th nowrap><?= $this->Paginator->sort('TIME') ?></th>
              <th  style="text-align:center"><?= $this->Paginator->sort('LEVEL') ?></th>
              <th><?= $this->Paginator->sort('TEXT') ?></th>
            </tr>
          </thead>
          <tbody>
        <?php foreach ($messages as $message): ?>
            <tr>
              <td>
                <?= $this->Html->link(h($this->DeployResults->getMessagesProjectName(h($message->FK_CHANGE_IMPACTS_ID))), ['controller' => 'Operations', 'action' => 'view', $this->DeployResults->getMessagesProjectID(h($message->FK_CHANGE_IMPACTS_ID))]) ?>
              </td>
              <td><?= $this->DeployResults->getMessagesProjectStep(h($message->FK_CHANGE_IMPACTS_ID)) ?></td>
              <td><?= $this->DeployResults->getMessagesChangeImpactDesc(h($message->FK_CHANGE_IMPACTS_ID)) ?></td>
              <td nowrap><?= h($message->MESSAGE_TIME) ?></td>
              <td style="text-align:center"><?= $this->DeployResults->prettyUpResult(h($message->MESSAGE_LEVEL)) ?></td>
              <td><?= h($message->TEXT) ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
          </table>
          <?php } else { ?>
              <div class="well">There are no messages.</div>
          <?php } ?>
      </div>

    <div class="row">
      <div class="col-md-12 text-center">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?><br/>
            <small><?= $this->Paginator->counter() ?></small>
        </ul>
      </div>
    </div>

    </div>
</div>
</div>
</div>
