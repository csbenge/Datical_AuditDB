
<div class="changesetDetails index large-10 medium-9 columns">
<h2><?= __('CHANGESET DETAILS') ?></h2>
    <table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('DTYPE') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('CHANGEID') ?></th>
            <th><?= $this->Paginator->sort('AUTHOR') ?></th>
            <th><?= $this->Paginator->sort('FILENAME') ?></th>
            <th><?= $this->Paginator->sort('CHECKSUM') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($changesetDetails as $changesetDetail): ?>
        <tr>
            <td><?= $this->Number->format($changesetDetail->ID) ?></td>
            <td><?= h($changesetDetail->DTYPE) ?></td>
            <td><?= $this->Number->format($changesetDetail->E_VERSION) ?></td>
            <td><?= h($changesetDetail->CHANGEID) ?></td>
            <td><?= h($changesetDetail->AUTHOR) ?></td>
            <td><?= h($changesetDetail->FILENAME) ?></td>
            <td><?= h($changesetDetail->CHECKSUM) ?></td>
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
