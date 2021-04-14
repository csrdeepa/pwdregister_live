function handleresponse(status, message, position = "bar-center") {
    notificationalert(position, status, message);
}

function handleerror(data) {
    var mess = "";
    if (isJSON(data)) {
        data = data ? JSON.parse(data) : data;
        if (data && data.message) {
            if ($.isPlainObject(data.message)) {
                $.each(data.message, function (key, value) {
                    mess += value + '<br>';
                });
            } else {
                mess = data.message;
            }
        } else {
            mess = "Server Error";
        }
    } else {
        mess = "Server Error";
    }
    notificationalert("bar-center", "error", mess);
}

function notificationalert(type, status, content) {
    $('.notify').removeClass('do-hide');
    setTimeout(function () {
        $('.notify')
            .removeClass()
            .attr('data-notification-status', status)
            .html(content)
            .addClass(type + ' notify')
            .addClass('do-show');
    }, 100);

    setTimeout(function () { $('.notify').removeClass('do-show').addClass('do-hide'); }, 4000);
}
function isJSON(str) {
    if (str != "") {
        try {
            return (JSON.parse(str) && !!str);
        } catch (e) {
            return false;
        }
    } else {
        return false;
    }
}

