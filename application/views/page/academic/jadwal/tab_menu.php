
<style>
    .tab-right {
        float: right !important;
    }
</style>


<div class="row" style="margin-top: 30px;">

    <div class="col-md-12" style="text-align: right;">
        <button data-page="penawaran_mk" type="button" class="btn btn-info btn-action control-jadwal">
            <i class="fa fa-plus-circle right-margin" aria-hidden="true"></i> Add Course Offerings
        </button>
        <button data-page="inputjadwal" type="button" class="btn btn-success btn-action control-jadwal">
            <i class="fa fa-plus-circle right-margin" aria-hidden="true"></i> Add Schedule
        </button>
        |
        <div class="btn-group" role="group" aria-label="...">

            <button data-page="jadwal" type="button" class="btn btn-default btn-default-primary btn-action
                        control-jadwal">Schedule</button>

            <button data-page="ruangan" type="button" class="btn btn-default btn-default-primary btn-action
                        control-jadwal">Room Schedule</button>
        </div>

    </div>
    <div class="col-md-12">
        <hr/>

    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div id="dataPage"></div>
    </div>
</div>


<script>
    $(document).ready(function () {
        loadPage('jadwal');

    });
    $(document).on('click','.btn-action',function () {
        var page = $(this).attr('data-page');
        loadPage(page);
    });

    function loadPage(page) {
        loading_page('#dataPage');
        var data = {
            page : page
        };

        var token = jwt_encode(data,"UAP)(*");
        var url = base_url_js+'academic/__setPageJadwal';
        $.post(url,{token:token},function (page) {
            setTimeout(function () {
                $('#dataPage').html(page);
            },1000);
        });
    }
</script>

<!--<div class="tabbable tabbable-custom tabbable-full-width">-->
<!--    <ul class="nav nav-tabs">-->
<!--        <li class="--><?php //if($this->uri->segment(2)=='jadwal' && $this->uri->segment(3)==''){echo 'active';} ?><!--">-->
<!--            <a href="--><?php //echo base_url('academic/jadwal'); ?><!--">Jadwal</a>-->
<!--        </li>-->
<!--        <li class="--><?php //if($this->uri->segment(2)=='jadwal1' && $this->uri->segment(3)==''){echo 'active';} ?><!--">-->
<!--            <a href="--><?php //echo base_url('academic/jadwal'); ?><!--">Ruang</a>-->
<!--        </li>-->
<!---->
<!--        <li class="tab-right --><?php //if($this->uri->segment(3)=='group-kelas'){echo 'active';} ?><!--">-->
<!--            <a href="--><?php //echo base_url('academic/jadwal/group-kelas'); ?><!--"><i class="fa fa-wrench right-margin" aria-hidden="true"></i>  Group Kelas</a>-->
<!--        </li>-->
<!--        <li class="tab-right --><?php //if($this->uri->segment(3)=='ruang'){echo 'active';} ?><!--">-->
<!--            <a href="--><?php //echo base_url('academic/jadwal/ruang'); ?><!--"><i class="fa fa-wrench right-margin" aria-hidden="true"></i>  Ruang</a>-->
<!--        </li>-->
<!--        <li class="tab-right --><?php //if($this->uri->segment(3)=='input-jadwal'){echo 'active';} ?><!--">-->
<!--            <a href="--><!--"><i class="fa fa-wrench right-margin" aria-hidden="true"></i> Jadwal</a>-->
<!--        </li>-->
<!---->
<!--    </ul>-->
<!--    <div style="border:none; border-top:1px solid #ddd;padding-top: 30px;">-->
<!--        --><?php //echo $contenttabs; ?>
<!--    </div>-->
<!--</div>-->