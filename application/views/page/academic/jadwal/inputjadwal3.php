
<style>
    .box-group-prodi {
        background: #ff980036 !important;
    }

    #formAddjadwal .form-control[disabled] {
        color: #333333;
    }
</style>

<div class="row" style="margin-bottom: 30px;">
    <div class="col-md-2"></div>
    <div class="col-md-8" id="formAddjadwal">
        <button  data-page="jadwal" class="btn btn-info btn-action"><i class="fa fa-arrow-circle-left right-margin" aria-hidden="true"></i> Back</button>

        <table class="table table-striped" style="margin-top: 10px;">
            <tr>
                <td style="width: 190px;">Tahun Akademik</td>
                <td style="width: 1px;">:</td>
                <td>
                    <strong id="semesterName">-</strong>
                    <input id="formSemesterID" class="hide" type="hidden" readonly/>
                </td>
            </tr>
            <tr>
                <td>Kelas Gabungan ?</td>
                <td>:</td>
                <td>
                    <label class="radio-inline">
                        <input type="radio" name="formCombinedClassess" class="form-jadwal" value="0" checked> Tidak
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="formCombinedClassess" class="form-jadwal" value="1"> Ya
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    Program Kuliah
                </td>
                <td>:</td>
                <td>
                    <select class="form-control form-jadwal" id="formProgramsCampusID"></select>
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
<!--                    <select class="form-control" id="BaseProdi"></select>-->
                    <select id="formBaseProdi" class="select2-select-00 col-md-12 full-width-fix form-jadwal" size="5">
                        <option value=""></option>
                    </select>
                    <input type="hide" class="hide" id="groupCode" readonly />
                </td>
            </tr>


<!--            <tr>-->
<!--                <td colspan="3" style="text-align: center;">-->
<!--                    <button class="btn btn-danger">Cancle</button>-->
<!--                    <button class="btn btn-success" id="btnSaveSchedule" >Save</button>-->
<!--                </td>-->
<!--            </tr>-->
        </table>

        <div class="widget box">
            <div class="widget-header" style="background: #2196f345;">
                <h4>Group : <span class="TextGroupCode"></span>-<span class="TextNoGroupCode"></span></h4>
            </div>
            <div class="widget-content">

                <table class="table">
                    <tr>
                        <td style="width: 190px;">Mata Kuliah</td>
                        <td style="width: 1px;">:</td>
                        <td>
                            <select class="select2-select-00 selec2-mk full-width-fix form-jadwal"
                                    size="5" data-group="1" id="formMataKuliah1">
                                <option value=""></option>
                            </select>
                            <p style="margin-bottom: 0px;">
                                Semester : <span id="textSemester1"></span> | <span id="textTotalSKS1"></span> SKS | <span id="textTimeSKS1"></span>
                            </p>

                            <input type="hide" class="hide" id="totalTime1" readonly />

                        </td>
                    </tr>
                    <tr>
                        <td>Dosen Koordinator</td>
                        <td>:</td>
                        <td>
                            <select class="select2-select-00 full-width-fix form-jadwal"
                                    size="5" id="formDosenKoordinator1">
                                <option value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Dosen Team Teaching ?</td>
                        <td>:</td>
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="radio-inline">
                                        <input type="radio" class="form-jadwal" fm="dtt-form" name="formteamTeaching1" data-id="1" value="0" checked> Tidak
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" class="form-jadwal"  fm="dtt-form" name="formteamTeaching1" data-id="1" value="1"> Ya
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <select class="select2-select-00 full-width-fix form-jadwal"
                                            size="5" multiple id="formTeamDosen1" disabled></select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Ruangan</td>
                        <td>:</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="select2-select-00 full-width-fix form-jadwal form-classroom"
                                            size="5" id="formClassroom1">
                                        <option value=""></option>
                                    </select>
                                </div>
<!--                                <div class="col-xs-2">-->
<!--                                    <button class="btn btn-default btn-block form-jadwal" id="btnRefreshDataClassroom">-->
<!--                                        <i class="fa fa-refresh"></i>-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                                <div class="col-xs-4">-->
<!--                                    <button class="btn btn-default btn-default-primary btn-block form-jadwal" id="btnAddClassroom">Add Ruangan</button>-->
<!--                                </div>-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Hari</td>
                        <td>:</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-4">
                                    <select class="form-control form-jadwal" id="formDay1"></select>
                                </div>
                                <div class="col-xs-4">
                                    <input type="time" class="form-control form-jadwal formSesiAwal" id="formSesiAwal1" data-id="1" />
                                </div>
                                <div class="col-xs-4">
                                    <input type="time" class="form-control" id="formSesiAkhir1" style="color: #333;" readonly />
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div id="widgetNewGroup"></div>

        <div style="text-align: right;">
            <button class="btn btn-default btn-default-danger" id="removeNewGroup">Remove Group</button>
            <button class="btn btn-default btn-default-success" data-group="1" id="addNewGroup">Save & Add New Group</button>
            <button class="btn btn-success">Save</button>
        </div>
    </div>

</div>

<script>
    $(document).ready(function () {

        window.dataGroup = 1;

        $('.TextNoGroupCode').html(dataGroup);
        $('.form-filter-jadwal').prop('disabled',true);

        loadAcademicYearOnPublish();

        loadSelectOptionBaseProdi('#formBaseProdi');
        loadSelectOptionConf('#formProgramsCampusID','programs_campus','');
        loadSelectOptionAllMataKuliahSingle('#formMataKuliah'+dataGroup,'');
        loadSelectOptionLecturersSingle('#formDosenKoordinator'+dataGroup,'');
        loadSelectOptionLecturersSingle('#formTeamDosen'+dataGroup,'');
        loadSelectOptionClassroom('#formClassroom'+dataGroup,'');
        fillDays('#formDay'+dataGroup,'Eng','');

        loadSelectOptionClassGroup('#formClassGroup','');


        $('#formMataKuliah'+dataGroup+',#formDosenKoordinator'+dataGroup+',' +
            '#formClassGroup,#formTeamDosen'+dataGroup+',#formClassroom'+dataGroup).select2({allowClear: true});


        $(document).on('change','input[type=radio][fm=dtt-form]',function () {
            var ID = $(this).attr('data-id');
            loadformTeamTeaching($(this).val(),'#formTeamDosen'+ID);
        });

        $('input[type=radio][name=formCombinedClassess]').change(function () {
            loadformCombinedClassess($(this).val());
            loadGroupClass();
        });

        $('#formBaseProdi').select2({
            allowClear: true
        });
    });

    $('#addNewGroup').click(function () {


        var p = saveSchedule(dataGroup);

        if(p){

            var g = $('#groupCode').val();
            dataGroup = dataGroup + 1;
            $('#widgetNewGroup').append('<div class="widget box" id="dataBox'+dataGroup+'">' +
                '                <div class="widget-header box-group-prodi">' +
                '                    <h4>Group : <span class="TextGroupCode">'+g+'</span>-'+dataGroup+'</h4>' +
                '                </div>' +
                '                <div class="widget-content">' +
                '                    <table class="table">' +
                '                   <tr>' +
                '                        <td style="width: 190px;">Mata Kuliah</td>' +
                '                        <td style="width: 1px;">:</td>' +
                '                        <td>' +
                '                            <select class="select2-select-00 full-width-fix selec2-mk form-jadwal"' +
                '                                    size="5" data-group="'+dataGroup+'" id="formMataKuliah'+dataGroup+'">' +
                '                                <option value=""></option>' +
                '                            </select>' +
                '                            <p style="margin-bottom: 0px;">' +
                '                                Semester : <span id="textSemester'+dataGroup+'"></span> | <span id="textTotalSKS'+dataGroup+'"></span> SKS | <span id="textTimeSKS'+dataGroup+'"></span>' +
                '                            </p>' +
                '                            <input type="hide" class="hide" id="totalTime'+dataGroup+'" readonly />' +
                '                        </td>' +
                '                    </tr>' +
                '                        <tr>' +
                '                            <td>Dosen Koordinator</td>' +
                '                            <td>:</td>' +
                '                            <td>' +
                '                                <select class="select2-select-00 full-width-fix form-jadwal"' +
                '                                        size="5" id="formDosenKoordinator'+dataGroup+'">' +
                '                                    <option value=""></option>' +
                '                                </select>' +
                '                            </td>' +
                '                        </tr>' +
                '                        <tr>' +
                '                            <td>Dosen Team Teaching ?</td>' +
                '                            <td>:</td>' +
                '                            <td>' +
                '                                <div class="row">' +
                '                                    <div class="col-md-4">' +
                '                                        <label class="radio-inline">' +
                '                                            <input type="radio" class="form-jadwal" fm="dtt-form" data-id="'+dataGroup+'" name="formteamTeaching'+dataGroup+'" value="0" checked> Tidak' +
                '                                        </label>' +
                '                                        <label class="radio-inline">' +
                '                                            <input type="radio" class="form-jadwal" fm="dtt-form" data-id="'+dataGroup+'" name="formteamTeaching'+dataGroup+'" value="1"> Ya' +
                '                                        </label>' +
                '                                    </div>' +
                '                                    <div class="col-md-8">' +
                '                                        <select class="select2-select-00 full-width-fix form-jadwal"' +
                '                                                size="5" multiple id="formTeamDosen'+dataGroup+'" disabled></select>' +
                '                                    </div>' +
                '                                </div>' +
                '                            </td>' +
                '                        </tr>' +
                '                        <tr>' +
                '                            <td>Ruangan</td>' +
                '                            <td>:</td>' +
                '                            <td>' +
                '                                <div class="row">' +
                '                                    <div class="col-xs-6">' +
                '                                        <select class="select2-select-00 full-width-fix form-jadwal form-classroom"' +
                '                                                size="5" id="formClassroom'+dataGroup+'">' +
                '                                            <option value=""></option>' +
                '                                        </select>' +
                '                                    </div>' +
                '                                </div>' +
                '                            </td>' +
                '                        </tr>' +
                '                        <tr>' +
                '                            <td>Hari</td>' +
                '                            <td>:</td>' +
                '                            <td>' +
                '                                <div class="row">' +
                '                                    <div class="col-xs-4">' +
                '                                        <select class="form-control form-jadwal" id="formDay'+dataGroup+'"></select>' +
                '                                    </div>' +
                '                                    <div class="col-xs-4">' +
                '                                        <input type="time" class="form-control form-jadwal formSesiAwal" data-id="'+dataGroup+'" id="formSesiAwal'+dataGroup+'" />' +
                '                                    </div>' +
                '                                    <div class="col-xs-4">' +
                '                                        <input type="text" class="form-control" id="formSesiAkhir'+dataGroup+'" style="color: #333;" readonly />' +
                '                                    </div>' +
                '                                </div>' +
                '                            </td>' +
                '                        </tr>' +
                '                    </table>' +
                '                </div>' +
                '            </div>');

            $('#dataBox'+dataGroup).animateCss('slideInDown');

            $(this).attr('data-group',dataGroup);

            loadSelectOptionAllMataKuliahSingle('#formMataKuliah'+dataGroup,'');
            loadSelectOptionLecturersSingle('#formDosenKoordinator'+dataGroup,'');
            fillDays('#formDay'+dataGroup,'Eng','');
            loadSelectOptionClassroom('#formClassroom'+dataGroup,'');
            loadSelectOptionLecturersSingle('#formTeamDosen'+dataGroup,'');

            $('#formMataKuliah'+dataGroup+',#formDosenKoordinator'+dataGroup+',#formTeamDosen'+dataGroup+',#formClassroom'+dataGroup).select2({allowClear: true});
        } else {

        }
    });

    function saveSchedule(ID) {
        var process = true;

        var SemesterID = $('#formSemesterID').val();
        var CombinedClasses = $('input[name=formCombinedClassess]:checked').val();
        var ProgramsCampusID = $('#formProgramsCampusID').val();

        var formBaseProdi = $('#formBaseProdi').val();
        if(CombinedClasses==1){
            if(formBaseProdi=='' || formBaseProdi==null) { formRequired('#s2id_formBaseProdi ul.select2-choices'); process = false;}
        } else {
            if(formBaseProdi=='' || formBaseProdi==null) { formRequired('#s2id_formBaseProdi a'); process = false;}
        }

        var formMataKuliah = $('#formMataKuliah'+ID).val();
        if(formMataKuliah!=''){
            var MKID = formMataKuliah.split('.')[0].trim();
            var MKCode = formMataKuliah.split('.')[1].trim();
        } else {
            formRequired('#s2id_formMataKuliah'+ID+' a'); process = false;
        }

        var NIP = $('#formDosenKoordinator'+ID).val();
        if(NIP=='' || NIP==null) { formRequired('#s2id_formDosenKoordinator'+ID+' a'); process = false;}

        var TeamTeaching = $('input[name=formteamTeaching'+ID+']:checked').val();

        var formTeamDosen = $('#formTeamDosen'+ID).val();
        if(TeamTeaching==1){
            if(formTeamDosen=='' || formTeamDosen==null) { formRequired('#s2id_formTeamDosen'+ID+' ul.select2-choices'); process = false;}
        }

        var ClassroomID = $('#formClassroom'+ID).val();
        if(ClassroomID=='' || ClassroomID==null) { formRequired('#s2id_formClassroom'+ID+' a'); process = false;}

        var DayID = $('#formDay'+ID).val();

        var StartSessions = $('#formSesiAwal'+ID).val();
        if(StartSessions=='' || StartSessions==null) { formRequired('#formSesiAwal'+ID); process = false;}

        var EndSessions = $('#formSesiAkhir'+ID).val();

        var ClassGroup = $('#groupCode').val() +'-'+dataGroup;

        var data = {
            action : 'add',
            formData : {
                SemesterID : SemesterID,
                ProgramsCampusID : ProgramsCampusID,
                CombinedClasses : CombinedClasses,
                MKID : MKID,
                MKCode : MKCode,
                ClassGroup : ClassGroup,
                TeamTeaching : TeamTeaching,
                NIP : NIP,
                ClassroomID : ClassroomID,
                DayID : DayID,
                StartSessions : StartSessions,
                EndSessions : EndSessions,
                UpdateBy : sessionNIP,
                UpdateAt : dateTimeNow()
            },
            formDataClassGroup : {
                ProgramsCampusID : ProgramsCampusID,
                SemesterID : SemesterID,
                Group : ClassGroup
            },
            formBaseProdi : {
                formBaseProdi : formBaseProdi
            },
            formTeamTeaching : {
                formTeamDosen : formTeamDosen
            }
        };

        if(process){

            var token = jwt_encode(data,'UAP)(*');
            var url = base_url_js+'api/__crudSchedule';
            $.post(url,{token:token},function (result) {
                $('#formMataKuliah'+ID+',#formDosenKoordinator'+ID+',input[name=formteamTeaching'+ID+'],#formTeamDosen'+ID+',' +
                    '#formClassroom'+ID+',#formDay'+ID+',#formSesiAwal'+ID+',' +
                    'input[name=formCombinedClassess],#formProgramsCampusID,#formBaseProdi,#formMataKuliah')
                    .prop('disabled',true);
                toastr.success('Group '+ClassGroup,'Saved!');
            });


        } else {
            toastr.error('Form Wajib Diisi','Error!!');
        }

        return process;

    }



    $('#removeNewGroup').click(function () {
        if(dataGroup>1){
            $('#dataBox'+dataGroup).animateCss('flipOutX',function () {
                $('#dataBox'+dataGroup).remove();
                dataGroup = dataGroup - 1;
            });
        }
    });

    $(document).on('change','.selec2-mk',function () {
        var dg = $(this).attr('data-group');
        var dataMK = $('#formMataKuliah'+dg).val();
        // var dataMK = $(this).val();
        if(dataMK!=''){
            loadDataSKS(dataMK,dg);
        }
    });

    // $('#formMataKuliah').change(function () {
    //     // loadGroupClass();
    //
    //
    // });

    $('#formBaseProdi').change(function () {
        loadGroupClass();
    });

    $(document).on('keyup','.formSesiAwal',function () {
        var ID = $(this).attr('data-id');
        var dataMK = $('#formMataKuliah').find(':selected').val();
        var sesi = $(this).val();

        if(dataMK!='' && sesi!=''){

            loadEndSession(sesi,ID);
        }
    });

    function loadGroupClass() {
        var ProdiCode = $('#formBaseProdi').val();
        // var MKCode = $('#formMataKuliah').val();
        var formCombinedClassess = $('input[type=radio][name=formCombinedClassess]:checked').val();

        // if(ProdiCode!=null && MKCode!='' ){
        //     var P = ProdiCode.split('.')[1];
        //     var MK = MKCode.split('.')[1];

            // $('#groupCode').val(P+'.'+MK);
            // $('.TextGroupCode').html(P+'.'+MK);
        // }

        var g = (formCombinedClassess==1) ? 'ZO' : ProdiCode.split('.')[1];

        $('#groupCode').val(g);
        $('.TextGroupCode').html(g);


    }

    function loadDataSKS(dataMK,dg) {
        var mk = dataMK.split('.');
        var data = {
            action : 'read',
            ID : mk[0],
            MKCode : mk[1]
        };

        var token = jwt_encode(data,'UAP)(*');
        var url = base_url_js+"api/__crudMataKuliah";
        $.post(url,{token:token},function (data_json) {
            $('#textSemester'+dg).html(data_json.Semester);
            $('#textTotalSKS'+dg).html(data_json.TotalSKS);

            var totalTime = parseInt(timePerCredits) * parseInt(data_json.TotalSKS);

            var h = parseInt(totalTime) / 60 | 0,
                m = parseInt(totalTime) % 60 |0;
            $('#textTimeSKS'+dg).html(totalTime+" menit ( "+h+" jam "+m+" menit )");
            $('#totalTime'+dg).val(totalTime);

            var value = $('#formSesiAwal'+dg).val();
            loadEndSession(value,dg);
            // for(var i=1;i<=dataGroup;i++){
            //     var value = $('#formSesiAwal'+i).val();
            //     loadEndSession(value,'#formSesiAkhir'+);
            // }

        });

    }



    function loadEndSession(value,dg) {
        if (value != '') {
            var totalTime = $('#totalTime'+dg).val();

            var expSesi = value.split(':');
            var sesiAwal = moment()
                .hours(expSesi[0])
                .minutes(expSesi[1])
                .format('LT');

            var sesiAkhir = moment()
                .hours(expSesi[0])
                .minutes(expSesi[1])
                .add(parseInt(totalTime), 'minute').format('HH:mm');

            console.log(sesiAkhir);

            $('#formSesiAkhir'+dg).val(sesiAkhir);
        }
    }

    $('#btnAddClassroom').click(function () {
        modal_dataClassroom('disabledBtnActio','Group Class');
    });

    $('#btnRefreshDataClassroom').click(function () {
        loading_buttonSm('#btnRefreshDataClassroom');
        $('.form-classroom').prop('disabled',true);

        setTimeout(function () {
            $('#btnRefreshDataClassroom').html('<i class="fa fa-refresh"></i>');
            $('.form-classroom,#btnRefreshDataClassroom').prop('disabled',false);

            $('.form-classroom').select2("destroy").empty();
            $('.form-classroom').append('<option value=""></option>');
            loadSelectOptionClassroom('.form-classroom','');
            $(".form-classroom").select2();
        },1000);
    });

    // function loadProdiSelectOption(element){
    //     var url= base_url_js+'api/__getBaseProdiSelectOption';
    //     var option = $(''+element);
    //     option.append('<option></option>');
    //     $.get(url,function (data_json) {
    //         for(var i=0;i<data_json.length;i++){
    //             option.append('<option value="'+data_json[i].ID+'.'+data_json[i].Code+'">'+data_json[i].Code+' | '+data_json[i].NameEng+'</option>');
    //         }
    //     });
    // }

    function loadformCombinedClassess(value) {
        if(value==1){
            // $('.single-select').remove();
            $('#formBaseProdi').prop('multiple',true);
        } else {
            // $('#formBaseProdi').prepend('<option class="single-select"></option>');
            $('#formBaseProdi').prop('multiple',false);
        }

        $('#formBaseProdi').select2({
            allowClear: true
        });
    }

    function loadformTeamTeaching(value,element_dosen) {
        if(value==1){
            $(element_dosen).prop('disabled',false);
        } else {
            $(element_dosen).select2("val", null);
            $(element_dosen).prop('disabled',true);
        }
    }

    function loadAcademicYearOnPublish() {
        var url = base_url_js+"api/__getAcademicYearOnPublish";
        $.get(url,function (data_json) {
            $('#formSemesterID').val(data_json.ID);
            $('#semesterName').html(data_json.YearCode+' | '+data_json.Name);

        });
    }

    function formRequired(element) {
        $(''+element).css('border','1px solid red');
        setTimeout(function () {
            $(element).css('border','1px solid #ccc');
        },5000);
    }

</script>