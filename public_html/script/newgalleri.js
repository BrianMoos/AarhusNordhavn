(function($){
    "use strict";
    $(document).ready(function(){
        var baseURL = "./galleri/";
        $.getJSON("./galleri/galleri.json").done(function(data){
            $("#galleri").html(listThumbs(data, "thumb"));
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
    
}(jQuery));

