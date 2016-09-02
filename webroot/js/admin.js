// admin.js

$(document).ready(function() {
  $("#tags_field").select2( {
	  placeholder: "Select some tags",
	  allowClear: true,
	  tags: true
  	}).on("change", function(e) { 

  		//console.log('update') 

  		var data = $("#tags_field").val();
  		if (data ) {
  			var text = data.join();
  			$('#tag-string').val(text);
  		}else {
  			$('#tag-string').val('');
  		}

  		//console.log(data);

  		
  	});

  //$eventSelect.on("select2:select", function (e) { log("select2:select", e); });

  // turn on counter
  $("#seo-desc").textcounter({
    type: "character",
    max: 50,
    stopInputAtMaximum: false});

  $("#seo-title").textcounter({
    type: "character",
    max: 50,
    stopInputAtMaximum: false});

});