
<h3><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> <?= h($changesetID) ?></h3>

<div class="row">
<div class="col-md-8">
    <div class="panel panel-info">
    <div class="panel-heading"><strong>Description</strong></div>
    <div class="panel-body">
    <div><?= h($changeimpactDesc) ?></div>

    </div>
    </div>
</div>
</div>

<div class="row">
<div class="col-md-8">
    <div class="panel panel-info">
    <div class="panel-heading"><strong>SQL</strong></div>
    <div class="panel-body">
    <div class="changeimpactsSqls view large-10 medium-9 columns">
        <?= $this->Text->autoParagraph(h($changeimpactsSql->SQL_TEXT)) ?>
    </div>

    </div>
    </div>
</div>
</div>