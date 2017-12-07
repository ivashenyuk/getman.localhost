$(document).ready(function () {
    $.ajax({
        url: '/php/content.php',
        type: 'POST',
        dataType: 'html',
        success: function success(data) {
            var obj = jQuery.parseJSON((data));
            for (var i = 0; i < obj.length; i++) {
                $('main').append('<section>'+
                    '<div><img src="'+ obj[i]['img'] +'" alt="'+ obj[i]['name'] +'"></div>' +
                    '<div><a href="/getman-info.php?id='+ obj[i]['id'] +'&name='+ obj[i]['name'] +'&content='+ obj[i]['content'] +'&img='+ obj[i]['img'] +'">'+ obj[i]['name'] +'</a></div>' +
                    '<div>'+ obj[i]['description'] +'</div>' +
                '</section>');
            }
        }
    });
});