<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?= $this->renderSection('content') ?>
        </div>
        <div class="col-md-4">
            <?= $this->include('layout/sidebar') ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>