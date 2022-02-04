@extends('layout.layout')

@section('content')

    <div class="container" style="display:none;">   
        <div class="row">
            <div class="col-11  card ml-3 mt-3 mr-3 main-page" style="">
                <span class="title mt-3 text-center">Hi, <span class="text-color-primary">{{$user->name}}</span></span>
                <div class="row">&nbsp;</div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4 p-0">
                        <img class="barcode " src="https://api.qrserver.com/v1/create-qr-code/?data={{$user->kartu}}&amp;size=100x100" alt="">
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div>
                <span class="text-center">Have a nice Day!</span>
                <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div>
                <div class="row">&nbsp;</div>
               

            </div>
        </div>
       
       
        <div class="row mt-3 ml-3">
            <h2 class="sub-title mt-3">Berita</h2>
        </div>
        <div class="row ml-3 mr-3">
            <div class="col-4 p-0 text-left" id="umum">
                <label for="umum">Umum</label>
            </div>
            <div class="col-4 p-0 text-left" id="bic">
                <label for="bic">BIC</label>
            </div>
            <div class="col-4 p-0 text-left" id="youth">
                <label for="youth">Youth</label>
            </div>
        </div>
        <div id="label-active" class="row col-3 label-berita"></div>
        <div class="row m-3">
            <div id="content-umum" class="col-12 p-0">
                <b>{{$beritaumum->judul ?? ""}}</b> <br>
                {{$beritaumum->berita ?? ""}}
            </div>
            <div id="content-bic" class="col-12 p-0" style="display:none;">
                <b>{{$beritabic->judul ?? ""}} </b><br>
                {{$beritabic->berita ?? ""}}
            </div>
            <div id="content-youth" class="col-12 p-0" style="display:none;">
                <b>{{$beritayouth->judul ?? ""}}</b> <br>
                {{$beritayouth->berita ?? ""}}
            </div>
        </div>
        <div class="row-blank"></div>
    </div>
    
   <!-- <div id="test-container">
   
   </div> -->
   <script> 
        $("#content-bic").hide();
        $("#content-youth").hide();
        
        $(document).ready(function(){
            $(".container").show(400);
            var x= $("#umum").position();
            $("#label-active").css({left: x.left+15});
            $("#umum").click(function(){
                var x= $("#umum").position();
                $("#label-active").animate({left: x.left});
                $("#content-umum").show(1000);
                $("#content-bic").hide(1000);
                $("#content-youth").hide(1000);

            });
            $("#bic").click(function(){
                var x= $("#bic").position();
                $("#label-active").animate({left: x.left});
                $("#content-umum").hide(1000);
                $("#content-bic").show(1000);
                $("#content-youth").hide(1000);
            });
            $("#youth").click(function(){
                var x= $("#youth").position();
                $("#label-active").animate({left: x.left});
                $("#content-umum").hide(1000);
                $("#content-bic").hide(1000);
                $("#content-youth").show(1000);
            });
           
        });
        
       
   </script>
   
@endsection