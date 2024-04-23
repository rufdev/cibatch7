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
        <div class="row mb-2">
            <div class="col-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalform">Add Item</button>
            </div>
        </div>
        <div class="row  mb-2">
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

<div class="modal fade" id="modalform">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Office</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="code">Code</label>
                                <input type="text" class="form-control" id="code" name="code" placeholder="Enter Office Code">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Office Name">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>


            </div>
            <!-- <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
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