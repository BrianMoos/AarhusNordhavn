(function($){
    "use strict";
    $(document).ready(function(){
        $.getJSON("./galleri/galleri.json").done(function(data){
            data.forEach(function(image){
               $("#galleri").append(listGalleri(image)); 
            });
        });//getJSON
    });//document ready
    
    function listGalleri(image){
        var html = "";
        var baseURL = "./galleri/";
        html = html.concat('<div class="col-sm-6 col-md-3">');
        html = html.concat('<div class="thumbnail">');
        html = html.concat('<img class="img-responsive" src="', baseURL, image.name, '" alt="" data-toggle="modal" data-target="#myModal">');
        html = html.concat('</div>');
        html = html.concat('</div>');
        return html;
    }
    
}(jQuery));

