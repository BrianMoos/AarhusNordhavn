(function($){
    "use strict";
    $(document).ready(function(){
        var baseURL = "./galleri/";
        $.getJSON("./galleri/galleri.json").done(function(data){
            $("#galleri").html(listThumbs(data));
        });//getJSON
    });//document ready
    
    function listThumbs(data){
        var baseURL = "./galleri/";
        var html = "";
        html = html.concat('<ul id="gallerilist" class="thumbs">');
        data.forEach(function(element){
           html = html.concat('<li><img id="', element.id, '" src="', baseURL, element.thumb, '" /></li>') 
        });
        html = html.concat('</ul>');
        return html;
    }
    
}(jQuery));

