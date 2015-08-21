<!-- File: src/Template/Projects/index.ctp -->

<div class="col-md-10 main">
  <h2 class="page-header"><i class="fa fa-fw fa-folder"></i>Projects <small> All</small></h2>

<div class="col-md-12 main">
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-folder fa-fw"></i> Projects</h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">

    <?php if (!($projects->isEmpty())) { ?>
    <table class="table table-striped table-bordered table-hover table-condensed">

    <thead>
        <tr>
            <th><?= $this->Paginator->sort('PROJECT_NAME') ?></th>
            <th><?= $this->Paginator->sort('PROJECT_ID') ?></th>
            <th><?= $this->Paginator->sort('PROJECT_UUID') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($projects as $project): ?>
        <tr>
            <td><?= $this->Html->link(h($project->PROJECT_NAME), ['action' => 'view', $project->PROJECT_UUID, $project->PROJECT_NAME]) ?></td>
            <td><?= $this->Number->format($project->PROJECT_ID) ?></td>
            <td><?= h($project->PROJECT_UUID) ?></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <?php } else { ?>
        <div class="well">There are no deployments.</div>
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
