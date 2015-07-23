<!-- File: src/Template/Operations/index.ctp -->

<div class="container-fluid">
    <div class="col-md-2 sidebar">
    <?php echo $this->element('sidebar-tables'); ?>
    </div>

    <div class="col-md-10 main">
      <h2 class="page-header"><?= __('MESSAGES') ?></h2>

<table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('MESSAGE_LEVEL') ?></th>
            <th><?= $this->Paginator->sort('MESSAGE_TIME') ?></th>
            <th><?= $this->Paginator->sort('TEXT') ?></th>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('DTYPE') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('CHANGEIMPACT_MESSAGES_ID') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($messages as $message): ?>
        <tr>
            <td><?= $this->DeployResults->prettyUpMessageLevel(h($message->MESSAGE_LEVEL)) ?></td>
            <td><?= h($message->MESSAGE_TIME) ?></td>
            <td><?= h($message->TEXT) ?></td>
            <td><?= $this->Number->format($message->ID) ?></td>
            <td><?= h($message->DTYPE) ?></td>
            <td><?= $this->Number->format($message->E_VERSION) ?></td>
            <td><?= $this->Number->format($message->CHANGEIMPACT_MESSAGES_ID) ?></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
   <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4 text-center">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?><br/>
        <small><?= $this->Paginator->counter() ?></small>
    </ul>
  </div>
  <div class="col-md-4"></div>
</div>
