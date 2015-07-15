(function($){
    "use strict";
    $(document).ready(function(){
        $.getJSON("./galleri/galleri.json").done(function(data){
            $("#galleri").html(listThumbs(data, "thumb"));
            addImgHandler(data); 
            $("#back").click(function(){
                $("#topimg").html('<img src="images/fotogalleri_top.png" alt="" class="center-block" />');
                $("#galleri").html(listThumbs(data, "thumb"));
                $("#image").html("");
                addImgHandler(data); 
            });
        });//getJSON
    });//document ready
    
    function listThumbs(data, size){
        var baseURL = "./galleri/";
        var html = "";
        html = html.concat('<ul id="gallerilist" class="', size, '">');
        data.forEach(function(element){
           html = html.concat('<li><img id="', element.id, '" src="', baseURL, element[size], '" /></li>') 
        });
        html = html.concat('</ul>');
        return html;
    }
    
    function addImgHandler(data){
        data.forEach(function(image){
            $("#" + image.id).click(function(){
               $("#topimg").html(""); 
               $("#galleri").html(listThumbs(data, "micro"));
               showImg(data, image.name);
            });
        });
    }
    
    function showImg(data ,img){
        var baseURL = "./galleri/";
        $("#image").html('<img src="' + baseURL + img + '" alt="" class="large_img img-responsive" />');
        addImgHandler(data);
    }
    
}(jQuery));

