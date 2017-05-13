/**
 * This <angket.lgbt.app> project created by :
 * Name         : syafiq
 * Date / Time  : 13 May 2017, 4:27 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

/*!
 * IE10 viewport hack for Surface/desktop Windows 8 bug
 * Copyright 2014-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

// See the Getting Started docs for more information:
// http://getbootstrap.com/getting-started/#support-ie10-width

(function ()
{
    'use strict';

    if (navigator.userAgent.match(/IEMobile\/10\.0/))
    {
        var msViewportStyle = document.createElement('style');
        msViewportStyle.appendChild(
            document.createTextNode(
                '@-ms-viewport{width:auto!important}'
            )
        );
        document.querySelector('head').appendChild(msViewportStyle)
    }

})();
