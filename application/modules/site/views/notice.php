<style type="text/css">
legend.scheduler-border {
    font-size: 14px !important;
}

fieldset.scheduler-border {
    min-height: 300px;
}
</style>

<div class="row">
    <?php $this->load->view('frontend/right_side_bar'); ?>

    <div class="col-md-9 main-content">
        <section class="contact-us">
            <div class="table-responsive chbappy1">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="">শিরোনাম</th>
                            <th scope="">প্রকাশের তারিখ</th>
                            <th scope="">ডাউনলোড</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php foreach ($notice as $key => $value) { ?>
                        <tr>
                            <th><?=$key+1?></th>
                            <td class="text">
                              <?= $value->title?>
                            </td>
                            <td><?=date_bangla_calender_format(date('d-m-Y', strtotime($value->create_at)))?></td>
                            <td class="">
                            <a href="<?php echo base_url('assets/notice/') . '/' . $value->file; ?>"><i class="fa fa-download"></i></a>                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>






        </section>
    </div>


</div>