<?php 
App::uses('AppHelper', 'View/Helper');

class UploadHelper extends AppHelper {
		
	var $endpoint = "/gallery/upload";
		
    public function niceUpload($model, $foreignKeySelector) {
    	$base_url = Configure::read('base_url');
      $endpoint = $base_url.$this->endpoint;
    	return "".
        "$(\"#file-uploader\").fineUploader({".
					"request: {".
            "endpoint: '".$endpoint."',".
          "},".
          "text: {".
            //"uploadButton: '<div><i class=\"icon-upload icon-white\"></i> Test me now and upload a file</div>'".
			"uploadButton: '<span class=\"qq-area\"></span>'".
          "},".
          "template: '<div class=\"qq-uploader\">' +".
                      "'<pre class=\"qq-upload-drop-area\"><span>{dragZoneText}</span></pre>' +".
                      "'<div class=\"qq-upload-button\" style=\"width: auto;\">{uploadButtonText}</div>' +".
                      "'<span class=\"qq-drop-processing\"><span>{dropProcessingText}</span>".
                      "<span class=\"qq-drop-processing-spinner\"></span></span>' +".
                      "'<ul class=\"qq-upload-list\" style=\"margin-top: 10px; text-align: center;\"></ul>' +".
                    "'</div>',".
          "classes: {".
            "success: 'alert alert-success',".
            "fail: 'alert alert-error'".
          "}".
				"}).on('error', function (event, id, name, reason) {".
				    "alert(\"error\");".
				"}).on('submit', function (event, id, name) {".
				    "var foreignkey_id = $('#".$foreignKeySelector."').attr('value');".
				    "$(this).fineUploader('setParams', {'foreign_key':foreignkey_id, model: '".$model."'});".
				"}).on('complete', function (event, id, name, responseJSON) {".
						"$('#gallery_images').append('<li class=\"img-container\">".
							"<div class=\"img-box\">".
              	"<a id=\"delete\" href=\"#\" rel=\"'+responseJSON.image_id+'\"><span class=\"icon trash\">".
              	"<i class=\"icon-trash\"></i></span></a>".
                "<img src=\"".$base_url."/files/'+responseJSON.model_folder+'/gallery/'+responseJSON.foreign_key+'/'+name+'\">".
              "</div>".
            "</li>');".
				"});".
				"$('#gallery_images').on('click', 'a#delete', function(e){".
					"e.preventDefault();".
					"var _self = this;".
					"$.ajax(".
			    "{".
			        "url: '".$base_url."/gallery/delete?id='+this.rel+'/',".
			        "type: 'GET',".
			        "datatype: 'json',".
			        "success: function (data) {". 
			        	"if(data.success == true) {".
			        	"console.log($(_self).parent());".
				        	"$(_self).parent().remove();".
			        	"}else {".
					        "alert(\"Erro ao remover imagem.\");".	
			        	"}".
			        "},".
			        "error: function (jqXHR, textStatus, errorThrown) { alert(\"Erro ao remover imagem.\"); }".
			    "});".
				"});";    	
    }
}
?>
