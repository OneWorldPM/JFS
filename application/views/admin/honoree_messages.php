<?php
//print_r($messages);exit;
?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>

<div class="main-content">
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-12 col-md-offset-0">
                    <h1 class="mainTitle">Honorees Messages</h1><br><br><br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center" id="table">
                            <thead class="th_center">
                            <th>Date</th>
                            <th>Honoree</th>
                            <th>Message</th>
                            <th>Attendee</th>
                            </thead>
                            <tbody>
                            <?php if (isset($messages) && !empty($messages)) {
                                foreach ($messages as $message) {
                                    ?>
                                    <tr>
                                        <td><?= $message->date ?></td>
                                        <td><?= $message->message_recepient ?></td>
                                        <td><?= $message->message ?></td>
                                        <td><?= $message->first_name . '' . $message->last_name ?></td>
                                    </tr>
                                <?php }
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    $(document).ready( function () {
        $('#table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                 'csv', 'excel'
            ]
        });
    } );
</script>