/// <reference path="jquery-2.1.4.js" />
/// <reference path="common.js" />

(function ($, jQuery) {
    "use strict";
    $(document).ready(function(){
        $.getJSON("./galleri/galleri.json").done(function(data){
            data.forEach(function (image) {
               $("#galleri").append(listGalleri(image)); 
               $("#modal").append(createModal(image));
            });
        });//getJSON
    });//document ready
    
    function listGalleri(image){
        var html = "";
        var baseURL = "./galleri/";
        html = html.concat('<div class="col-sm-6 col-md-3">');
        html = html.concat('<div class="thumbnail">');
        html = html.concat('<img class="img-responsive" src="', baseURL, image.name, '" alt="" data-toggle="modal" data-target="#', image.id, '">');
        html = html.concat('</div>');
        html = html.concat('</div>');
        return html;
    }
    
    function createModal(image){
        var html = "";
        var baseURL = "./galleri/";
        html = html.concat('<div class="modal fade" id="', image.id, '" tabindex="-1" role="dialog" aria-labelledby="ModalLabel', image.id, '" aria-hidden="true">');
        html = html.concat('<div class="modal-dialog">');
        html = html.concat('<div class="modal-content">');
        html = html.concat('<div class="modal-header">');
        html = html.concat('<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>');
        html = html.concat('<h4 class="modal-title" id="ModalLabel', image.id, '">Billeder fra Aarhus Nordhavn</h4>');
        html = html.concat('</div>');
        html = html.concat('<div class="modal-body">');
        html = html.concat('<img class="img-responsive" src="', baseURL, image.name, '" alt="">');
        html = html.concat('</div>');
        html = html.concat('</div>');
        html = html.concat('</div>');
        html = html.concat('</div>');
        return html;
    }
    
}($, jQuery));

