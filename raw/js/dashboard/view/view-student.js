/**
 * This <angket.000.app> project created by :
 * Name         : syafiq
 * Date / Time  : 04 May 2017, 1:29 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */


(function ($)
{
    $.backstretch("/assets/img/ui/landing_page/fix/backgroundinner.jpg");

    audiojs.events.ready(function ()
    {
        var aj = audiojs.createAll();
    });

    $(function ()
    {
        $("a#logout").on('click', function (event)
        {
            event.preventDefault();
            $.ajax({
                type: 'post',
                url: $(this).attr('href'),
                dataType: 'json',
                contentType: 'application/x-www-form-urlencoded; charset=UTF-8; X-Requested-With: XMLHttpRequest'
            })
                .done(function (data)
                {
                    if (data.hasOwnProperty('data'))
                    {
                        if (data['data'].hasOwnProperty('notify'))
                        {
                            var notify = data['data']['notify'];
                            for (var i = -1; ++i < notify.length;)
                            {
                                $.notify({message: notify[i][0]}, {type: notify[i][1]});
                            }
                        }
                    }
                    if (data.hasOwnProperty('code'))
                    {
                        if (data['code'] === "200")
                        {
                            if (data.hasOwnProperty('redirect'))
                            {
                                setTimeout(function ()
                                {
                                    location.href = data['redirect'];
                                }, 2000);
                            }
                        }
                    }
                })
                .fail(function ()
                {
                    $.notify({
                        message: 'Error', url: window.location.protocol + "//" + window.location.host
                    }, {
                        type: 'danger'
                    });
                })
        });
    });
    /*
     * Run right away
     * */
})(jQuery);