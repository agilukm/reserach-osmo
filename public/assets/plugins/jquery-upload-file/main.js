function openInNewTab(url) {
    var win = window.open(url, '_blank');
    win.focus();
}
var option_upload = {
    url: site_url + "lib/Upload_file/upload",
    fileName:"myfile",
    acceptFiles:"application/pdf",
    showPreview:true,
    previewHeight: "100px",
    previewWidth: "100px",
    previewMargin: "10px",
    multiple: false,
    dragDrop: false,
    maxFileCount: 1,
    formData: $(this).serialize(),
    dynamicFormData: function(obj)
    {
        var data = {
            id: obj.attr('id'),
        };
        return data;
    },
    showStatusAfterSuccess: true,
    showDelete: true,
    showDownload: true,
    showPreview: true,
    showFileCounter: false,
    showFileSize: true,
    showDone: false,
    showProgress: false,
    onLoad:function(obj)
    {
        if (typeof obj.attr('id') !== 'undefined')
        {
            if(typeof obj.attr('fileexist') !== 'undefined')
            {
                var fileexist = obj.attr('fileexist');
                if(fileexist != '')
                {
                    $.ajax(site_url + 'lib/Upload_file/load?full_path=' + fileexist)
                    .always(function(jqXHR, textStatus, data) {
                    })
                    .success(function(data){
                        // var data = jQuery.parseJSON(data);
                        obj.createProgress(data.name, data.path, data.size, obj.attr('id'));
                    })
                    ;
                }
            }
        }
        else
        {
            // alert('attribute upload file tidak dapat ditemukan');
        }
    },
    deleteCallback: function(data, pd) {
        $('#id-'+data.id).val('');
    },
    downloadCallback: function(filename, pd, xhr, files) {
        var href = $(pd.download).attr('href');
        openInNewTab(href);
    },
    onSuccess: function(files,data,xhr,pd){
        // console.log(data);
        // var data = jQuery.parseJSON(data);
        // console.log(pd);
        // console.log(xhr);
        pd.download.attr('href', data.full_path);
        pd.filename.hide();
        pd.progressDiv.hide();
        $('#id-'+data.id).val(data.filename);
    }
};

$(document).ready(function() {
    $("#file_jurnal").uploadFile(option_upload);
});
$(document).ready(function() {
	$("#eqe").uploadFile(option_upload);
});
