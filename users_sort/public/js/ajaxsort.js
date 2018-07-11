function ajaxLoad(filename, content) {
    content = typeof content !== 'undefined' ? content : 'content';
    
    $.ajax({
        type: "GET",
        url: filename,
        contentType: false,
        success: function (data) {
            $("#" + content).html(data);
        }  
    });
}