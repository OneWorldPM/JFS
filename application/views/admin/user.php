<style>
    #example_wrapper .dt-buttons .buttons-csv{
        background-color: #1fbba6;
        padding: 5px 15px 5px 15px;

    }
</style>
<div class="main-content">
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">List Of User Data</h1>
                </div>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw">
            <div class="row">
                <div class="panel panel-primary" id="panel5">
                    <div class="panel-heading">
                        <h4 class="panel-title text-white">User Data
                        <div class="btn btn-success btn-sm import-user" style="float:right"> Import Users </div></h4>
                    </div>

                    <div class="panel-body bg-white" style="border: 1px solid #b2b7bb!important;">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-bordered table-striped text-center" id="user">
                                    <thead class="th_center">
                                        <tr>
                                            <th>Customer ID</th>
                                            <th>Date</th>
                                            <th>Register ID</th>
                                            <th>Profile</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Country</th>
                                            <th>VIP Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($user) && !empty($user)) {
                                            foreach ($user as $val) {
                                                ?>
                                                <tr>
                                                    <td><?= $val->cust_id ?></td>
                                                    <td><?= date("Y-m-d", strtotime($val->register_date)) ?></td>
                                                    <td><?= $val->register_id ?></td>
                                                    <td>
                                                        <?php if ($val->profile != "") { ?>
                                                            <img src="<?= base_url() ?>uploads/customer_profile/<?= $val->profile ?>" style="height: 40px; width: 40px;">
                                                        <?php } else { ?>
                                                            <img src="<?= base_url() ?>assets/images/Avatar.png" style="height: 40px; width: 40px;">
                                                        <?php } ?>
                                                    <td><?= $val->first_name . ' ' . $val->last_name ?></td>
                                                    <td><?= $val->email ?></td>
                                                    <td><?= $val->country ?></td>
                                                    <td><?=(isset($val->vip ) && ( $val->vip == "1"))?'VIP':''?></td>
                                                    <td> 
                                                        <a class="btn btn-danger btn-sm delete_presenter" href="<?= base_url() . 'admin/user/deleteuser/' . $val->cust_id ?>">
                                                            <i class="fa fa-trash-o"></i> Delete
                                                        </a>
                                                        <a class="btn btn-primary btn-sm" href="<?= base_url() . 'admin/user/user_activity/' . $val->cust_id ?>">
                                                            Activity
                                                        </a>
                                                        <?php if ($val->v_card != "") { ?>
                                                            <a download class="btn btn-info btn-sm" href="<?= base_url() . 'uploads/upload_vcard/' . $val->v_card ?>">
                                                                vCard
                                                            </a>
                                                        <?php } else { ?>
<!--                                                            <a class="btn btn-info btn-sm" href="--><?//= base_url() . 'admin/exportvcard/' . $val cust_id ?><!--">-->
<!--                                                                vCard-->
<!--                                                            </a>-->
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="modal-upload-user" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Import User</h4>
            </div>
            <div class="modal-body">
                <form id="import-user">

                    <div class="">

                        <div class="custom-file">
                            <input accept=".xlsx,.xls" type="file" class="form-control custom-file-input btn btn-outline-primary" id="inputUserFile" style="cursor: pointer;">
                            <label class=" custom-file-label" for="inputUserFile">Choose file</label>
                        </div>

                        <div class="input-group-append">
                            <button class="upload-users-btn btn btn-info text-white form-control" type="button">Upload</button>
                        </div>

                    </div>
                    <small style="color: red;">Only .xlsx or .xls  file are allowed.</small><br>
                    <p style="color: red;">If the email is existing this will automatically update the users information</p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<?php
$msg = $this->input->get('msg');
switch ($msg) {
    case "D":
        $m = "User Delete Successfully...!!!";
        $t = "success";
        break;
    case "E":
        $m = "Something went wrong, Please try again!!!";
        $t = "error";
        break;
    default:
        $m = 0;
        break;
}
?>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
    $(document).ready(function () {
<?php if ($msg): ?>
            alertify.<?= $t ?>("<?= $m ?>");
<?php endif; ?>
        $("#user").dataTable({
            "ordering": true,
        });
    });


    $(document).ready(function(){
        let supportedFiles = ['xlsx', 'xls']

        $('.import-user').on('click', function (){
            $('#modal-upload-user').modal('show');
        });

        $('#inputUserFile').change(function(){
            let fileName = ($(this).val()).replace(/^.*[\\\/]/, '');
            $(this).next('.custom-file-label').html(fileName);
        });

        $('#modal-upload-user').on('click','.upload-users-btn',function(){
            $('#modal-upload-user').modal('hide');
            if ($('#inputUserFile').get(0).files.length === 0) {
                toastr.error("Please select a file to load");
                return false;
            }

            let fileName = ($('#inputUserFile').val()).replace(/^.*[\\\/]/, '');

            let fileExtension = fileName.substr(fileName.lastIndexOf('.')+1);

            if (!supportedFiles.includes(fileExtension)) {
                toastr.error("File type "+fileExtension+" is not supported");
                return false;
            }

            Swal.fire({
                title: 'Are you sure?',
                text: "You are about to load \""+fileName+"\"" +
                "This will update user information with existing email"+
                "You wont be able to revert this action",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, load it!'
            }).then((result)=>{
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Please Wait',
                        text: 'Doing the magic...',
                        //imageUrl: '<?//=base_url('upload_system_files/vendor/images/ycl_anime_500kb.gif')?>//',
                        // imageAlt: 'Loading...',
                        showCancelButton: false,
                        showConfirmButton: false,
                        allowOutsideClick: false
                    });

                    let formData = new FormData();
                    formData.append('file', $('#inputUserFile')[0].files[0]);
                    $.ajax({
                        url: "<?=base_url('admin/user/import_users')?>",
                        type: "POST",
                        data:  formData,
                        contentType: false,
                        cache: false,
                        processData:false,
                        beforeSend : function()
                        {

                        },success: function(data)
                        {
                            data = JSON.parse(data);
                            if (data.status == 'success')
                            {
                                Swal.fire(
                                    'Done!',
                                    data.msg+'<br>'+'<span><i class="fas fa-check-circle" style="color: green;"></i> '+data.importedUsers+' Users Imported</span><br><span><i class="fas fa-exclamation-triangle" style="color: darkorange;"></i> '+data.updatedUsers+' Existing Users Updated</span>',
                                    'success'
                                ).then(()=>{
                                   location.reload();
                                });
                            }else{
                                $("#inputPresentationsFile").val("");

                                Swal.fire(
                                    'Problem!',
                                    'Data load was aborted! <br> Reason: '+data.msg+'<br>No Entries created',
                                    'error'
                                ).then(()=>{

                                });
                            }
                        },
                        error: function(e)
                        {
                            Swal.fire(
                                'Problem!',
                                e.responseText,
                                'error'
                            ).then(()=>{

                            });
                        }
                    })

                }
            });
        })
    });
</script>








