@extends('layout.layoutsuperadmin')

@section('content')
    <div class="page-wrapper ">
        <div class="container-fluid">
            <center>
                <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div>
                   <form action="{{url('/buatibadah')}}" class="col-5" method="POST" id="option">
                        @csrf
                        <label for="" class="text-center">Jenis Ibadah</label>
                        <select name="jenis" id="option-ibadah" class="form-control" onchange="change()">
                            <option value="ibadah1">Ibadah 1</option>
                            <option value="ibadah2">Ibadah 2</option>
                            <option value="bic">BIC</option>
                            <option value="youth">Youth</option>
                        </select>
                        <button class="btn btn-primary mt-3" id="btn">Lanjutkan</button>
                   </form>

                   <center id="absen" style="display:none;">
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <img class="col-12 no-absen" src="{{asset('/assets/img/user-black.png')}}" id="foto-jemaat" alt="">
                            </div>
                            <div class="col-4"></div>
                            
                        </div>
                        <div class="row mt-3">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <input type="hidden" name="jenis" id="jenis" value="">
                                <input type="text" class="form-control" id="userid" name="absen">
                            </div>
                            <div class="col-4"></div>
                            
                        </div>
                        <button class="btn btn-primary" id="btn-absen" style="display:none;">Absen</button>
                </center>
                <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div> <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div> <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div> <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div>
            </center>
        </div>
    </div>
    <script> 
        $("#jenis").val($("#option-ibadah").val());

        function change(){
            var jenisibadah = $("#option-ibadah").val();
            $("#jenis").val(jenisibadah);
        }
       

        $(document).ready(function(){
            setInterval(() => {
                var foto = 'http://localhost:8000/assets/img/user-black.png';
                $("#foto-jemaat").attr("src",foto);
            }, 5000);

            $("#btn").click(function(e){
                e.preventDefault();
                $("#option").hide();
                $("#absen").show();
                $("#userid").focus();
            });
            $("#userid").on('input',function(e){
                e.preventDefault();
                var userid = $("#userid").val();
                if(userid.length == 7){
                    var http = new XMLHttpRequest();
                    var url = '/absenprocess';
                    var params = 'ibadah_id=1&user_id='+userid+'&jenis='+$("#jenis").val()+'&_token={{csrf_token()}}';
                    http.open('POST', url, true);
                    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

                    http.onreadystatechange = function() {//Call a function when the state changes.
                        if(http.readyState == 4 && http.status == 200) {
                            $("#userid").val("");
                            $("#userid").focus();
                            var data= JSON.parse(http.responseText);
                            var foto = 'http://localhost:8000/assets/img/'+data.foto;
                            $("#foto-jemaat").attr("src",foto);
                            alert(data.name);
                        }
                    }
                    http.send(params);
                }
            });
            // $("#userid").change(function(e){
            //     e.preventDefault();
            //     var userid = $("#userid").val();
            //     var http = new XMLHttpRequest();
            //     var url = '/absenprocess';
            //     var params = 'ibadah_id=1&user_id=1&user_name='+userid+'&jenis='+$("#jenis").val()+'&_token={{csrf_token()}}';
            //     http.open('POST', url, true);
            //     http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            //     http.onreadystatechange = function() {//Call a function when the state changes.
            //         if(http.readyState == 4 && http.status == 200) {
            //             $("#userid").val("");
            //             $("#userid").focus();
            //         }
            //     }
            //     http.send(params);
                
            // });
        });
        // function absen(){
        //     var userid = $("#userid").val();
        //     var http = new XMLHttpRequest();
        //     var url = '/absenprocess';
        //     var params = 'ibadah_id=1&user_id=1&user_name='+userid+'&jenis='+$("#jenis").val()+'&_token={{csrf_token()}}';
        //     http.open('POST', url, true);
        //     http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        //     http.onreadystatechange = function() {//Call a function when the state changes.
        //         if(http.readyState == 4 && http.status == 200) {
        //             $("#userid").val("");
        //         }
        //     }
        //     http.send(params);

        // }
    </script>
@endsection

