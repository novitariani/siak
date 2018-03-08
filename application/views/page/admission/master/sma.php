<style>
    .row-sma {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .form-time {
        padding-left: 0px;
        padding-right: 0px;
    }
    .row-sma .fa-plus-circle {
        color: green;
    }
    .row-sma .fa-minus-circle {
        color: red;
    }
    .btn-action {

        text-align: right;
    }

    #tableDetailTahun thead th {
        text-align: center;
    }

    .form-filter {
        margin-top: 10px;
        padding-top: 10px;
        border-top: 1px solid #ccc;
    }
    .filter-time {
        padding-left: 0px;
    }
</style>

<div class="row" style="margin-top: 30px;">
    <div class="col-md-10 formAddFormKD">
        <div class="widget box">
            <div class="widget-header">
                <h4 class="header"><i class="icon-reorder"></i> SMA / SMK</h4>
            </div>
            <div class="widget-content">
                <!--  -->
                <div class="row row-sma">
                    <label class="col-xs-3 control-label">Wilayah</label>
                    <div class="col-xs-9">
                        <div class="row">
                            <div class="col-xs-12">
                                <select class="select2-select-00 col-md-12 full-width-fix" id="selectSMA">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-sma">
                    <label class="col-xs-3 control-label">SMA / SMK</label>
                    <div class="col-xs-9">
                        <div class="row">
                            <div class="col-xs-12">
                                <select class="select2-select-00 col-md-12 full-width-fix" id="dataMK">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        loadSelectOptionWilayahURL();
    });

    function loadSelectOptionWilayahURL()
    {
        var url = "http://jendela.data.kemdikbud.go.id/api/index.php/cwilayah/wilayahKabGet";
        $.get(url,function (data_json) {

            for(var i=0;i<data_json['data'].length;i++){
                var selected = (i==0) ? 'selected' : '';
                $('#selectSMA').append('<option value="'+data_json['data'][i].kode_wilayah+'" '+selected+'>'+data_json['data'][i].nama+'</option>');
            }
        }).done(function () {
            //pageKurikulum();
        });

        /*$.getJSON(url, function(data) {
            for(var i=0;i<data.length;i++){
                //var selected = (i==0) ? 'selected' : '';
                //$('#selectSMA').append('<option value="'+data_json[i].kode_wilayah+'" '+selected+'>'+data_json[i].nama+'</option>');
            };
        });*/

        /*$.get( url, function( data_json ) {
          console.log(data_json);
        });*/
    }
</script>