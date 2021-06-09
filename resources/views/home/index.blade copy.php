@extends('layout.layout')

@section('content')

    <div class="container" style="display:none;">   
        <div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-12">
                <span class="title m-0">Hi, <span class="text-color-primary">{{$name}}</span></span>
            </div>
        </div>
       
        @include('parts.carousel')
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
        <div id="label-active" class="row col-3 ml-3 mr-3 label-berita"></div>
        <div class="row m-3">
            <div id="content-umum" class="col-12 p-0">
                UMUM <br>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam rerum earum veritatis blanditiis ipsum delectus porro maxime assumenda quas cum, alias quisquam ex magnam, quam sed praesentium fuga sit odit.
            </div>
            <div id="content-bic" class="col-12 p-0" style="display:none;">
                BIC <br>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, consequuntur incidunt. Exercitationem fugit corrupti, sapiente quas vero recusandae vitae illum, cupiditate doloribus omnis at expedita assumenda sed, perferendis fuga officiis?
            </div>
            <div id="content-youth" class="col-12 p-0" style="display:none;">
                YOUTH<br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, ullam. Possimus excepturi nisi quod quidem aspernatur fugiat aliquam pariatur eaque porro fugit quae dicta vero atque minima, et deserunt. Placeat?
            </div>
        </div>
    </div>
    
   <!-- <div id="test-container">
   
   </div> -->
   <script> 
        $("#content-bic").hide();
        $("#content-youth").hide();

        $(document).ready(function(){
            $(".container").show(400);
            
            $("#umum").click(function(){
                var x= $("#umum").position();
                $("#label-active").animate({left: x.left-30});
                $("#content-umum").show(1000);
                $("#content-bic").hide(1000);
                $("#content-youth").hide(1000);

            });
            $("#bic").click(function(){
                var x= $("#bic").position();
                $("#label-active").animate({left: x.left-30});
                $("#content-umum").hide(1000);
                $("#content-bic").show(1000);
                $("#content-youth").hide(1000);
            });
            $("#youth").click(function(){
                var x= $("#youth").position();
                $("#label-active").animate({left: x.left-30});
                $("#content-umum").hide(1000);
                $("#content-bic").hide(1000);
                $("#content-youth").show(1000);
            });
           
        });
        
       
   </script>
   
@endsection