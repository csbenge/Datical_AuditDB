<!-- File: src/Template/ChangesetImpacts/index.ctp -->

<div class="container-fluid">
    <div class="col-md-2 sidebar">
    <?php echo $this->element('sidebar-tables'); ?>
    </div>

    <div class="col-md-10 main">
      <h2 class="page-header"><?= __('CHANGE_IMPACTS') ?></h2>

<table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('DTYPE') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('CHANGE_DESCRIPTION') ?></th>
            <th><?= $this->Paginator->sort('AUTHOR') ?></th>
            <th><?= $this->Paginator->sort('FAILUREMESSAGE') ?></th>
            <th><?= $this->Paginator->sort('OPERATION_CHANGEIMPACTS_ID') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($changeimpacts as $changeimpact): ?>
        <tr>
            <td><?= $this->Number->format($changeimpact->ID) ?></td>
            <td><?= h($changeimpact->DTYPE) ?></td>
            <td><?= $this->Number->format($changeimpact->E_VERSION) ?></td>
            <td><?= h($changeimpact->CHANGE_DESCRIPTION) ?></td>
            <td><?= h($changeimpact->AUTHOR) ?></td>
            <td><?= h($changeimpact->FAILUREMESSAGE) ?></td>
            <td><?= $this->Number->format($changeimpact->OPERATION_CHANGEIMPACTS_ID) ?></td>
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

</div>
