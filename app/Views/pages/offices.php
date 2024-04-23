<?= $this->extend('template/admin_template') ?>

<?= $this->section('content') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Office Management</h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table id="datatable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CODE</th>
                            <th>NAME</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('javascripts') ?>
<script>
    $("#datatable").DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        paging: true,
        lengthChange: true,
        lengthMenu: [5, 10, 20, 50],
        searching: true,
        ordering: true,
        autoWidth: false,
        ajax: {
            url: '<?= base_url('offices/list') ?>',
            type: 'POST',
        },
        columns: [{
            data: 'id',
        }, {
            data: 'code',
        }, {
            data: 'name',
        }, {
            data: '',
            defaultContent: `
                <td>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
                </td>
                `
        }],
    });
</script>
<?= $this->endSection() ?>