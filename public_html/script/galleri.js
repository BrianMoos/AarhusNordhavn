
var galleri = {

	writeThumbs: function () {
		var content = Ajax.getFile('parser.php?q=thumbs');
		$('galleri').innerHTML = content;
		$("image").innerHTML = "";
		$("topimg").innerHTML = "<img src=\"images/fotogalleri_top.png\" alt=\"\" />";
	},
			
	showImg: function (imgid) {
	var content = Ajax.getFile('parser.php?q=micro&id=1');
	$('galleri').innerHTML = content;
	$('image').innerHTML = '<img  class=\"large_img\" alt="" src="galleri/' + imgid + '">';
	$("topimg").innerHTML = "";
	
	}

};

E.load(galleri.writeThumbs);