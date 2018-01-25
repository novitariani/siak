
<style>
    #tableTahunAkademik tr th {
        text-align: center;
    }
</style>
<div class="row" style="margin-top: 30px;">
    <div class="col-md-12">
        <div class="widget box">
            <div class="widget-header">
                <h4 class=""><i class="icon-reorder"></i> Tahun Akademik</h4>
                <div class="toolbar no-padding">
                    <div class="btn-group">
                        <span class="btn btn-xs" id="btn_addTahunAkademik">
                            <i class="icon-plus"></i> Add Tahun Akademik
                        </span>
                    </div>
                </div>
            </div>
            <div class="widget-content">
                <div id="loadTable"></div>
            </div>
        </div>
    </div>
</div>


<script>

    $(document).ready(function () {
        loadTable();
    });

    $(document).on('click','#btn_addTahunAkademik',function () {

        var action = $(this).attr('data-action');
        var url = base_url_js+"academic/modal-tahun-akademik";
        $.post(url,{action:action},function (html) {

            $('#GlobalModal .modal-header').html('<h4 class="modal-title">Tahun Akademik</h4>');
            $('#GlobalModal .modal-body').html(html);
            $('#GlobalModal .modal-footer').html('<button type="button" class="btn btn-default" id="modalBtnClose" data-dismiss="modal">Close</button>' +
                '<button type="button" class="btn btn-success" data-action="add" id="modalBtnSave">Save</button>');
            $('#GlobalModal').modal({
                'show' : true,
                'backdrop' : 'static'
            });

        });


    });

    function loadTable() {

        loading_page('#loadTable');
        var url = base_url_js+'academic/tahun-akademik-table';
        $.get(url,function (html) {
            setTimeout(function () {
                $('#loadTable').html(html);
            },2000);

        });

    }

    $(document).on('click','#modalBtnSave',function () {

        var action = $(this).attr('data-action');
        var ProgramCampusID = $('#modalProgram').find(':selected').val();
        var tahun = $('#modalTahun').find(':selected').val().split('.');
        var semester = $('input[name=semester]:checked').val();

        var YearCode = tahun[0].trim()+''+semester;
        var s = (semester==1) ? 'Ganjil' : 'Genap';
        var Name = tahun[1].trim()+' '+s;

        var data = {
            action : action,
            dataForm : {
                ProgramCampusID : ProgramCampusID,
                YearCode : YearCode,
                Name : Name,
                Status : 0,
                UpdateBy : sessionNIP,
                UpdateAt : dateTimeNow()
            }
        };

        loading_button('#modalBtnSave');
        $('#modalBtnClose, #modalProgram, #modalTahun, input[name=semester]').prop('disabled',true);

        var token = jwt_encode(data,'UAP)(*');
        var url = base_url_js+'api/__crudTahunAkademik';
        $.post(url,{token:token},function (result) {
            loadTable();
            setTimeout(function () {
                toastr.success('Data tersimpan','Success!!')
                $('#GlobalModal').modal('hide');
                $('#modalBtnSave').html('Save');
                $('#modalBtnSave, #modalBtnClose, #modalProgram, #modalTahun, input[name=semester]').prop('disabled',false);
            },2000);
        });

    });


</script>