/**
 * This <angket.000.app> project created by :
 * Name         : syafiq
 * Date / Time  : 06 May 2017, 11:12 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

(function ($)
{
    $.backstretch("/assets/img/ui/landing_page/fix/backgroundinner.jpg");

    var table = $('table#inventory_test').DataTable({
        paging: false
    });

    $(function ()
    {
        var uuid = "_schoolment_uuid_question_" + $('meta[property="uuid"]').attr('content');

        $("form#test").on('submit', function (event)
        {
            event.preventDefault();
            var form = $(this);
            console.log(form.serializeObject());
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serializeObject(),
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

        var supportsAudio = !!document.createElement('audio').canPlayType;
        if (supportsAudio)
        {
            var audio_container = 'ol#plList',
                index = 0,
                trackCount = $(audio_container).children().length,
                playing = false,
                audio = $('#music').bind('play', function ()
                {
                    playing = true;
                }).bind('pause', function ()
                {
                    playing = false;
                }).bind('ended', function ()
                {
                    if ((index + 1) < trackCount)
                    {
                        index++;
                        loadTrack(index);
                        audio.play();
                    } else
                    {
                        audio.pause();
                        index = 0;
                        playTrack(index);
                    }
                }).get(0),
                li = $(audio_container).find('li').click(function ()
                {
                    var id = parseInt($(this).index());
                    if (id !== index)
                    {
                        playTrack(id);
                    }
                }),
                loadTrack = function (id)
                {
                    $('.plSel').removeClass('plSel');
                    var li = $(audio_container).find('li').eq(id).addClass('plSel');
                    index = id;
                    audio.src = li.attr('data-audio')
                },
                playTrack = function (id)
                {
                    loadTrack(id);
                    audio.play();
                };
            playTrack(index);
        }

        function make_json_form_data()
        {
            var ar = $();
            for (var i = 0; i < table.rows()[0].length; i++)
            {
                ar = ar.add(table.row(i).node())
            }

            var json_obj = {};
            ar.find('select._test_no').each(function (i, el)
            {
                json_obj[$(el).attr('name')] = $(el).val();
            });
            return json_obj;
        }

        function save_content(uuid)
        {
            Cookies.set(uuid, make_json_form_data());
            $.notify({
                message: 'Jawaban Berhasil disimpan.'
            }, {
                type: 'info',
                delay: 1000,
                timer: 1000
            });
        }

        function load_content(uuid)
        {
            var _data = Cookies.getJSON(uuid);
            console.log(_data);

            jQuery.each(_data, function (k, v)
            {
                $("select._test_no[name=\"" + k + "\"]").find("option[value=\""+v+"\"]").prop('selected', true);
            });

            table.destroy();

            table = $('table#inventory_test').DataTable({
                searching: false,
                ordering: false,
                paging: false,
                fixedHeader: true,
                bLengthChange: false
            });
        }

        $("button#save").on('click', function (event)
        {
            save_content(uuid);
            /*
             for (var i = 0; i < table.rows()[0].length; i++)
             {
             ar = ar.add(table.row(i).node())
             }
             console.log('serialize ');
             console.log(+ar.find('input[type=radio]:checked').serialize());
             var json_obj = {};
             ar.find('input[type=radio]:checked').each(function (i, el)
             {
             json_obj[$(el).attr('name')] = $(el).val();
             });

             console.log('jsonobj ');
             console.log(json_obj);*/
            //Cookies.remove('name');
        });

        load_content(uuid);

        var intervalID = window.setInterval(myCallback, 20000);

        function myCallback()
        {
            save_content(uuid);
        }
    });
    /*
     * Run right away
     * */
})(jQuery);
