$(document).ready(function () {
    /*function to place labels over inputs in contact page*/
    $('#eCard label').labelOver('over');

    setTimeout(function () { $('#cntdwn').animate({ top: '-110px' }); }, 3000);

    $('div#player').ttwMusicPlayer(myPlaylist, {
        autoPlay: true,
        jPlayer: {
            swfPath: 'Jplayer'
        }
    });

    $('.playerControl').click(function () {
        if ($(this).css('opacity') == "1") {
            $.jPlayer.pause();
            $(this).animate({ opacity: "0.5" });
        }
        else {
            $.jPlayer.play();
            $(this).animate({ opacity: "1" });
        }
    });

    $('#cntdwn').hover(function () {
        $(this).animate({ top: '0px' });
    },
    function () {
        $(this).animate({ top: '-140px' });
    });

    $('#images').refineSlide({
        transition: 'cubeV',
        controls: 'arrows',
        autoPlay: true,
        delay: 4000,
        transitionDuration: 600
    });

    var angle = 0;
    setInterval(function () {
        angle += 2;
        $(".rotate").rotate(angle);
    }, 50);

    $('a.prev').click(function () {
        var name = $('#name').val();
        var message = $('#message').val();
        var qStr = name + "|" + message;

        tb_show("Happy New Year Mail Preview", 'mailingPrev.html#' + encodeURIComponent(qStr) + '?KeepThis=true&TB_iframe=true&width=575&height=687');
    });

    $('a.mail').click(function () {
        if ($('.emailSender').css('display') == 'block') {
            $('.footerWrap').animate({ zIndex: '80' });
            $('.emailSender').fadeOut();
        }
        else {
            $('a.mail').find('span.mask').animate({ opacity: '0' });
            $('.footerWrap').animate({ zIndex: '100' });
            $('.emailSender').fadeIn();
        }
    });

    var ms = $('.dynamicMessage').html();
    var newHtml = "";
    for (var i = 0; i < ms.length; i++) {
        var alph = ms.substr(i, 1).toLowerCase();

        if (alph == "a") {
            newHtml += "<span class=\"alpA\"></span>";
        }
        else if (alph == "b") {
            newHtml += "<span class=\"alpB\"></span>";
        }
        else if (alph == "c") {
            newHtml += "<span class=\"alpC\"></span>";
        }
        else if (alph == "d") {
            newHtml += "<span class=\"alpD\"></span>";
        }
        else if (alph == "e") {
            newHtml += "<span class=\"alpE\"></span>";
        }
        else if (alph == "f") {
            newHtml += "<span class=\"alpF\"></span>";
        }
        else if (alph == "g") {
            newHtml += "<span class=\"alpG\"></span>";
        }
        else if (alph == "h") {
            newHtml += "<span class=\"alpH\"></span>";
        }
        else if (alph == "ý" || alph == "i") {
            newHtml += "<span class=\"alpI\"></span>";
        }
        else if (alph == "j") {
            newHtml += "<span class=\"alpJ\"></span>";
        }
        else if (alph == "k") {
            newHtml += "<span class=\"alpK\"></span>";
        }
        else if (alph == "l") {
            newHtml += "<span class=\"alpL\"></span>";
        }
        else if (alph == "m") {
            newHtml += "<span class=\"alpM\"></span>";
        }
        else if (alph == "n") {
            newHtml += "<span class=\"alpN\"></span>";
        }
        else if (alph == "o") {
            newHtml += "<span class=\"alpO\"></span>";
        }
        else if (alph == "p") {
            newHtml += "<span class=\"alpP\"></span>";
        }
        else if (alph == "q") {
            newHtml += "<span class=\"alpQ\"></span>";
        }
        else if (alph == "r") {
            newHtml += "<span class=\"alpR\"></span>";
        }
        else if (alph == "s") {
            newHtml += "<span class=\"alpS\"></span>";
        }
        else if (alph == "t") {
            newHtml += "<span class=\"alpT\"></span>";
        }
        else if (alph == "u") {
            newHtml += "<span class=\"alpU\"></span>";
        }
        else if (alph == "v") {
            newHtml += "<span class=\"alpV\"></span>";
        }
        else if (alph == "w") {
            newHtml += "<span class=\"alpW\"></span>";
        }
        else if (alph == "x") {
            newHtml += "<span class=\"alpX\"></span>";
        }
        else if (alph == "y") {
            newHtml += "<span class=\"alpY\"></span>";
        }
        else if (alph == "z") {
            newHtml += "<span class=\"alpZ\"></span>";
        }
        else if (alph == "0") {
            newHtml += "<span class=\"alp0\"></span>";
        }
        else if (alph == "1") {
            newHtml += "<span class=\"alp1\"></span>";
        }
        else if (alph == "2") {
            newHtml += "<span class=\"alp2\"></span>";
        }
        else if (alph == "3") {
            newHtml += "<span class=\"alp3\"></span>";
        }
        else if (alph == "4") {
            newHtml += "<span class=\"alp4\"></span>";
        }
        else if (alph == "5") {
            newHtml += "<span class=\"alp5\"></span>";
        }
        else if (alph == "6") {
            newHtml += "<span class=\"alp6\"></span>";
        }
        else if (alph == "7") {
            newHtml += "<span class=\"alp7\"></span>";
        }
        else if (alph == "8") {
            newHtml += "<span class=\"alp8\"></span>";
        }
        else if (alph == "9") {
            newHtml += "<span class=\"alp9\"></span>";
        }
        else if (alph == ".") {
            newHtml += "<span class=\"alpPoint\"></span>";
        }
        else if (alph == "?") {
            newHtml += "<span class=\"alpQuestion\"></span>";
        }
        else if (alph == "!") {
            newHtml += "<span class=\"alpExclamation\"></span>";
        }
        else if (alph == ",") {
            newHtml += "<span class=\"alpComma\"></span>";
        }
        else if (alph == " " && newHtml != "") {
            newHtml += "<span class=\"alpSpace\"></span>";
        }
        else {
            newHtml += "";
        }
    }

    $('.dynamicMessage').html(newHtml);
    var elem = $('.dynamicMessage').find('span');
    var size = 0;
    for (var i = 0; i < elem.length; i++) {
        size += ($(elem[i]).width() - 5);
    }
    $('.dynamicMessage').css('padding-left', (980 - size) / 2);
    $('.dynamicMessage').css('width', $('.dynamicMessage').width() - (980 - size) / 2);
});

/* plugin for labels to be placed over input fields in contact page */
jQuery.fn.labelOver = function (overClass) {
    return this.each(function () {
        var label = jQuery(this);
        var f = label.attr('for');
        if (f) {
            var input = jQuery('#' + f);
            this.hide = function () {
                label.css({
                    textIndent: -10000
                })
            }
            this.show = function () {
                if (input.val() == '') label.css({
                    textIndent: 0
                })
            }
            // handlers
            input.focus(this.hide);
            input.blur(this.show);
            label.addClass(overClass).click(function () {
                input.focus()
            });
            if (input.val() != '') this.hide();
        }
    })
}