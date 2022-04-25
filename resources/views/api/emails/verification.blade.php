<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:og="http://opengraph.org/schema/">

<head>

    <meta property="og:title" content="EmailGeeks Digest: A Few Tricks To Start Off The New Year" />
    <meta property="fb:page_id" content="43929265776" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>FreshInbox #EmailGeek Digest</title>
    <!-- adapted from http://www.leemunroe.com/responsive-html-email-template/ -->

    <style type="text/css">
        img {
            max-width: 100%;
        }
        body {
            -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none;
        }

        @media screen and (max-width:480px){
            .body-wrap{
                padding:0px !important;
            }
            .container{
                padding:20px 5px !important;
            }
        }
        .repeat {
            display: inline-block;
            position: relative;
            height: 2em;
            padding: .4em;
            width: 2em;
        }
        .repeat:before, .repeat:after {
            content: '';
            display: block;
        }
        .repeat:before {
            border-color: transparent white white white;
            border-radius: 50%;
            border-style: solid;
            border-width: .45em;
            height: 1.5em;
            width: 1.5em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .repeat:after {
            border-color: transparent transparent transparent white;
            border-style: solid;
            border-width: .7em 0 .7em .9em;
            height: 0;
            position: absolute;
            top: 0;
            left: 50%;
            width: 0;
        }
    </style>
    <style type="text/css">
        @media screen and (-webkit-min-device-pixel-ratio: 0) {

            .animation,
            .replaycont{
                display:block!important;
                max-height:none !important;
            }
            /*
            Selective blocking for clients.
            - Samsung (#MessageViewBody) - no absolute positioning
            - Comcast/Zimbra (body.MsgBody) - inconsistent CSS support
            - Add .cbox to ensure CSS specificity weight exceeds earlier block
            */
            #MessageViewBody .animation,
            body.MsgBody .animation,
            #MessageViewBody .replaycont,
            body.MsgBody .replaycont{
                display:none !important;
            }

            .replaycont{
                position:absolute;
                display:block!important;
                text-decoration:none;
                font-family: 'Helvetica Neue',Helvetica,Arial;
                font-weight:bold;font-style:italic;
                font-size:26px;
                line-height:30px;
                color:#fafafa;
                left:50%;
                top:270px;
                margin-left:-30px;
                z-index:100;
            }
            .replayspacer{
                height:30px;
            }

            .happynewyear{
                margin-top:180px;
                display:inline-block;
                font-family: 'Helvetica Neue',Helvetica,Arial;
                font-weight:bold;
                font-style:italic;
                font-size:26px;
                line-height:30px;
                color:#fafafa;
                opacity:0;
            }

            .outer .happynewyear{
                -webkit-animation: 1s fadeout 3.5s ease-out reverse forwards;
            }
            #replay:active ~ .outer .happynewyear{
                -webkit-animation: 1s donothing 3.5s ease-out reverse forwards;
            }

            .animation{
                position:absolute;
                left:0px;
                top:0px;
                width:100%;
                height:2000px;
                overflow:hidden;
                background-color:black;
                z-index:200;
            }


            .outer .animation{
                -webkit-animation: 2s fadeout 5.5s ease-out forwards;
            }
            #replay:active ~ .outer .animation{
                -webkit-animation: 2s donothing 5.5s ease-out forwards;
            }
            /* --------------- */

            .star{
                position:absolute;
                left: 0px;
                top: 0px;
            }

            .s1{
                -webkit-transform: rotate(170deg);
            }
            .s2{
                -webkit-transform: rotate(20deg);
            }
            .s3{
                -webkit-transform: rotate(280deg);
            }
            .s4{
                -webkit-transform: rotate(190deg);
            }
            .s5{
                -webkit-transform: rotate(130deg);
            }
            .s6{
                -webkit-transform: rotate(320deg);
            }
            .s7{
                -webkit-transform: rotate(230deg);
            }
            .s8{
                -webkit-transform: rotate(60deg);
            }
            .s9{
                -webkit-transform: rotate(100deg);
            }

            .star::before{
                width:8px;
                height:8px;
                border-radius:8px;
                background-color:#FFFF81;
                content:'';
                display:inline-block;
            }
            .f2 .star::before{
                background-color:#FF4D29;
            }

            .f3 .star::before{
                background-color:#66FF00;
            }
            .f4 .star::before{
                opacity:0;
                background-color:#99CCFF;
            }
            .f5 .star::before{
                opacity:0;
                background-color:#FEFEFE;
            }

            .outer .f1 .star::before{
                -webkit-animation: 1.2s starry 2s ease-out forwards;
            }
            .outer .f2 .star::before{
                -webkit-animation: 1.2s starry2 2.6s ease-out forwards;
            }
            .outer .f3 .star::before{
                -webkit-animation: 1.2s starry2 2.8s ease-out forwards;
            }
            .outer .f4 .star::before{
                -webkit-animation: 1.2s starry2 3.5s ease-out forwards;
            }
            .outer .f5 .star::before{
                -webkit-animation: 1.2s starry2 3.55s ease-out forwards;
            }


            #replay:active ~ .outer .f1 .star::before{
                -webkit-animation: 1.2s donothing 2s ease-out forwards;
            }
            #replay:active ~ .outer .f2 .star::before{
                -webkit-animation: 1.2s donothing 2.6s ease-out forwards;
            }
            #replay:active ~ .outer .f3 .star::before{
                -webkit-animation: 1.2s donothing 2.8s ease-out forwards;
            }
            #replay:active ~ .outer .f4 .star::before{
                -webkit-animation: 1.2s donothing 3.5s ease-out forwards;
            }
            #replay:active ~ .outer .f5 .star::before{
                -webkit-animation: 1.2s donothing 3.55s ease-out forwards;
            }


            /* --------------- */

            .starcont{
                position:absolute;
                top:550px;
                left:50%;
                width:5px;
                margin:0px auto;
                opacity:0;
            }
            .starcontinner{
                position:absolute;
            }

            .f4 .starcont,.f5 .starcont{
                opacity:1;
            }
            .f4 .starcont{
                top:150px;
                left:30%;
            }
            .f5 .starcont{
                top:230px;
                left:65%;
            }


            .outer .f1 .starcont{
                -webkit-animation: 1.5s shootpathY 1s ease-out forwards;
            }
            .outer .f1 .starcontinner{
                -webkit-animation: 2.5s shootpathX 1s ease-in forwards;
            }
            .outer .f2 .starcont{
                -webkit-animation: 1.5s shootpath2Y 1.6s ease-out forwards;
            }
            .outer .f2 .starcontinner{
                -webkit-animation: 2.5s shootpath2X 1.6s ease-in forwards;
            }
            .outer .f3 .starcont{
                -webkit-animation: 1.5s shootpath3Y 1.8s ease-out forwards;
            }
            .outer .f3 .starcontinner{
                -webkit-animation: 2.5s shootpath3X 1.8s ease-in forwards;
            }



            #replay:active ~ .outer .f1 .starcont{
                -webkit-animation: 1.5s donothing 1s ease-out forwards;
            }
            #replay:active ~ .outer .f1 .starcontinner{
                -webkit-animation: 2.5s donothing 1s ease-in forwards;
            }
            #replay:active ~ .outer .f2 .starcont{
                -webkit-animation: 1.5s donothing 1.6s ease-out forwards;
            }
            #replay:active ~ .outer .f2 .starcontinner{
                -webkit-animation: 2.5s donothing 1.6s ease-in forwards;
            }
            #replay:active ~ .outer .f3 .starcont{
                -webkit-animation: 1.5s donothing 1.8s ease-out forwards;
            }
            #replay:active ~ .outer .f3 .starcontinner{
                -webkit-animation: 2.5s donothing 1.8s ease-in forwards;
            }


            /* --------------- */


            @-webkit-keyframes starry {
                0% {
                    -webkit-transform: translateX(0px);
                    opacity:1;
                }
                70%{
                    opacity:1;
                }
                100%{
                    -webkit-transform: translateX(250px);
                    opacity:0;
                }
            }


            @-webkit-keyframes starry2 {
                0% {
                    -webkit-transform: translateX(0px);
                    opacity:1;
                }
                70%{
                    opacity:1;
                }
                100%{
                    -webkit-transform: translateX(120px);
                    opacity:0;
                }
            }



            @-webkit-keyframes shootpathY {
                from {
                    transform: translateY(0px);
                    opacity:1;
                }
                to{
                    transform: translateY(-350px);
                    opacity:1;
                }
            }
            @-webkit-keyframes shootpathX {
                from {
                    transform: translateX(0px);
                }
                to{
                    transform: translateX(100px);
                }
            }

            @-webkit-keyframes shootpath2Y {
                from {
                    transform: translateY(0px);
                    opacity:1;
                }
                to{
                    transform: translateY(-340px);
                    opacity:1;
                }
            }
            @-webkit-keyframes shootpath2X {
                from {
                    transform: translateX(0px);
                }
                to{
                    transform: translateX(120px);
                }
            }

            @-webkit-keyframes shootpath3Y {
                from {
                    transform: translateY(0px);
                    opacity:1;
                }
                to{
                    transform: translateY(-300px);
                    opacity:1;
                }
            }
            @-webkit-keyframes shootpath3X {
                from {
                    transform: translateX(0px);
                }
                to{
                    transform: translateX(-120px);
                }
            }
            @-webkit-keyframes fadeout {
                0% {
                    opacity:1;
                    z-index:100;
                }
                99%{
                    opacity:0;
                    z-index:100;
                }
                100%{
                    opacity:0;
                    z-index:-1;
                }
            }
            @-webkit-keyframes donothing{
                from {
                    order:0;
                }
                to {
                    order:0;
                }
            }


            /* --- copy alt --- */

            @-webkit-keyframes starry-2 {
                0% {
                    -webkit-transform: translateX(0px);
                    opacity:1;
                }
                70%{
                    opacity:1;
                }
                100%{
                    -webkit-transform: translateX(250px);
                    opacity:0;
                }
            }


            @-webkit-keyframes starry2-2 {
                0% {
                    -webkit-transform: translateX(0px);
                    opacity:1;
                }
                70%{
                    opacity:1;
                }
                100%{
                    -webkit-transform: translateX(120px);
                    opacity:0;
                }
            }



            @-webkit-keyframes shootpathY-2 {
                from {
                    transform: translateY(0px);
                    opacity:1;
                }
                to{
                    transform: translateY(-350px);
                    opacity:1;
                }
            }
            @-webkit-keyframes shootpathX-2 {
                from {
                    transform: translateX(0px);
                }
                to{
                    transform: translateX(100px);
                }
            }

            @-webkit-keyframes shootpath2Y-2 {
                from {
                    transform: translateY(0px);
                    opacity:1;
                }
                to{
                    transform: translateY(-340px);
                    opacity:1;
                }
            }
            @-webkit-keyframes shootpath2X-2 {
                from {
                    transform: translateX(0px);
                }
                to{
                    transform: translateX(120px);
                }
            }

            @-webkit-keyframes shootpath3Y-2 {
                from {
                    transform: translateY(0px);
                    opacity:1;
                }
                to{
                    transform: translateY(-300px);
                    opacity:1;
                }
            }
            @-webkit-keyframes shootpath3X-2 {
                from {
                    transform: translateX(0px);
                }
                to{
                    transform: translateX(-120px);
                }
            }

            @-webkit-keyframes fadeout-2 {
                0% {
                    opacity:1;
                    z-index:100;
                }
                99%{
                    opacity:0;
                    z-index:100;
                }
                100%{
                    opacity:0;
                    z-index:-1;
                }
            }
        } /* end media query */

        .yfix{}

        input{
            display:none;
        }
    </style>

<body bgcolor="#f6f6f6" style="margin: 0; padding: 0;">
<div style="position:relative;">
    <div class="preheader" style="mso-hide:all;display:none;max-height:0px;overflow:hidden;">

    </div>
    <center><a href="#" style="font-size:12px;line-height:15px;text-decoration:none;font-family:Helvetica,Arial;color:#1E90FF">View this email in your browser</a></center>


    <!--[if !mso]><!-- -->
    <a id="replay" class="replaycont" style="display:block;max-height:0px;overflow:hidden;font-size:15px;font-style:normal;cursor:pointer;" href="#top">
        <div class="repeat" style="font-size:6px;vertical-align:middle;height:17px;"></div>
        <div style="display:inline-block;color:#fafafa;">Replay</div>
    </a>
    <!--<![endif]-->


    <div class="outer">

        <!-- body -->
        <table width="100%" class="body-wrap" bgcolor="#f6f6f6" style="margin: 0;padding-top:5px;">
            <tr>
                <td style="font-size:0;"></td>
                <td width="600" class="container" bgcolor="#FFFFFF" style="border: 1px solid #f0f0f0; font-family: 'Helvetica Neue', Helvetica; margin: 0 auto; max-width: 600px !important; padding: 20px">

                    <!-- content -->
                    <div class="content" style="display: block; font-family: 'Helvetica Neue', Helvetica; margin: 0 auto; max-width: 550px; padding: 0">
                        <table style="font-family: 'Helvetica Neue', Helvetica; margin: 0; padding: 0; width: 100%">
                            <tr>
                                <td style="font-family: 'Helvetica Neue', Helvetica; margin: 0; padding: 0">
                                    <table cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="190" valign="middle" height="30" style="font-family: 'Helvetica Neue', Helvetica; font-size: 14px; font-weight: normal;  margin: 0 0 10px; padding: 0;">
                                                <a href="http://freshinbox.com"><img src="http://freshinbox.com/images/fi-logo-large.jpg" width="150" border="0" style="display:block;" alt="FreshInbox"></a>
                                            </td>
                                            <td width="60" valign="middle" height="30" style="font-family: 'Helvetica Neue', Helvetica; font-size: 15px; font-weight: normal;  margin: 0 0 10px; padding: 0;"><a href="http://freshinbox.com/blog" style="color:#555555;text-decoration:none;font-weight:400;">Blog</a></td>
                                            <td width="100" valign="middle" height="30" style="font-family: 'Helvetica Neue', Helvetica; font-size: 15px; font-weight: normal;  margin: 0 0 10px; padding: 0;"><a href="http://freshinbox.com/resources" style="color:#555555;text-decoration:none;font-weight:400;">Resources</a></td>
                                        </tr>
                                    </table>


                                    <br><br>

                                    <!-- inner content -->
                                    <table style="font-family: 'Helvetica Neue', Helvetica; margin: 0; padding: 0; width: 100%">
                                        <tr>
                                            <td style="font-family: 'Helvetica Neue', Helvetica; margin: 0; padding: 8px;">


                                                <table width="100%" cellpadding="0" border="0" cellspacing="0">
                                                    <tr>
                                                        <td align="center" bgcolor="#037dcd" style="font-family: 'Helvetica Neue',Helvetica,Arial;font-weight:bold;font-style:italic;font-size:26px;line-height:30px;color:#fafafa;position:relative;"><br><br> Happy New Year<br> Email Geeks!<br><br><br>

                                                            <div class="replayspacer"></div>

                                                        </td>
                                                    </tr>
                                                </table><br><br>


                                                <!--             <hr width="75%" style="border: 0;height: 1px; background: #aaaaaa;">
                     -->


                                                <table width="100%" cellpadding="0" border="0" cellspacing="0">
                                                    <tr>
                                                        <td style="padding:10px 0px;">
                                                            <a href="https://www.emailonacid.com/blog/article/email-development/code-tutorial-how-to-build-an-interactive-puzzle-in-email?utm_referrer=freshinbox.com"><img src="http://freshinbox.com/images/newsletters/20161227-puzzle.png" width="550" style="display:block;width:100%;" border="0"></a>
                                                        </td>
                                                    </tr>
                                                </table>


                                                <h2 style="color: #333333; font-weight:normal; font-family: 'Helvetica Neue', Helvetica; font-size: 22px;margin: 15px 0 10px; padding: 0"><a href="https://www.emailonacid.com/blog/article/email-development/code-tutorial-how-to-build-an-interactive-puzzle-in-email?utm_referrer=freshinbox.com" style="color: #348eda;text-decoration:none;">Interactive Puzzle in Email</a></h2>

                                                <p style="font-family: 'Helvetica Neue', Helvetica; font-size: 16px;line-height:1.4;color:#5f5f5f;">
                                                    I built an interactive word puzzle email for Email on Acid for their December promotion. There's a ton of techniques used in this email and this tutorial goes into some of them.</p><br><br>


                                                <table width="100%" cellpadding="0" border="0" cellspacing="0">
                                                    <tr>
                                                        <td style="padding:10px 0px;">
                                                            <a href="https://www.emailonacid.com/blog/article/email-development/minesweeper-interactive-email-interview-with-camille-and-miah-from-table-tr?utm_referrer=freshinbox.com"><img src="http://freshinbox.com/images/newsletters/20161227-minesweeper.png" width="550" style="display:block;width:100%;" border="0"></a>
                                                        </td>
                                                    </tr>
                                                </table>


                                                <h2 style="color: #333333; font-weight:normal; font-family: 'Helvetica Neue', Helvetica; font-size: 22px;margin: 15px 0 10px; padding: 0"> <a href="https://www.emailonacid.com/blog/article/email-development/minesweeper-interactive-email-interview-with-camille-and-miah-from-table-tr?utm_referrer=freshinbox.com" style="color: #348eda;text-decoration:none;">Minesweeper in Email: Interview with table tr td</a></h2>

                                                <p style="font-family: 'Helvetica Neue', Helvetica; font-size: 16px;line-height:1.4;color:#5f5f5f;">
                                                    Check out this interview with Camille and miah from table tr td about their creation of the iconic Minesweeper PC game in an email.</p><br><br>


                                                <table width="100%" cellpadding="0" border="0" cellspacing="0">
                                                    <tr>
                                                        <td style="padding:10px 0px;">
                                                            <a href="https://www.emailonacid.com/blog/article/email-development/four-interactive-email-fallback-strategies?utm_referrer=freshinbox.com"><img src="http://freshinbox.com/images/newsletters/20161227-fallbacks.png" width="550" style="display:block;width:100%;" border="0"></a>
                                                        </td>
                                                    </tr>
                                                </table>

                                                <h2 style="color: #333333; font-weight:normal; font-family: 'Helvetica Neue', Helvetica; font-size: 22px;margin: 15px 0 10px; padding: 0"> <a href="https://www.emailonacid.com/blog/article/email-development/four-interactive-email-fallback-strategies?utm_referrer=freshinbox.com" style="color: #348eda;text-decoration:none;">Four Interactive Email Fallback Strategies</a></h2>

                                                <p style="font-family: 'Helvetica Neue', Helvetica; font-size: 16px;line-height:1.4;color:#5f5f5f;">
                                                    A key consideration in a kinetic email campaign is handling email clients that don't support interactivity and animations. This article goes into some of the fallback strategies.</p><br><br>


                                                <table width="100%" cellpadding="0" border="0" cellspacing="0">
                                                    <tr>
                                                        <td style="padding:10px 0px;">
                                                            <a href="https://www.emailonacid.com/blog/article/email-development/tutorial-how-to-code-an-interactive-greeting-card-email?utm_referrer=freshinbox.com"><img src="http://freshinbox.com/images/newsletters/20161227-holidaycard.gif" width="550" style="display:block;width:100%;" border="0"></a>
                                                        </td>
                                                    </tr>
                                                </table>

                                                <h2 style="color: #333333; font-weight:normal; font-family: 'Helvetica Neue', Helvetica; font-size: 22px;margin: 15px 0 10px; padding: 0"> <a href="https://www.emailonacid.com/blog/article/email-development/tutorial-how-to-code-an-interactive-greeting-card-email?utm_referrer=freshinbox.com" style="color: #348eda;text-decoration:none;">Holiday Card Cover Opening Technique </a></h2>

                                                <p style="font-family: 'Helvetica Neue', Helvetica; font-size: 16px;line-height:1.4;color:#5f5f5f;">
                                                    Geoff Phillips wrote a blog on a technique that uses 3D transforms to mimic a card opening effect.<br><br>
                                                    <span style="font-style:italic;color:#555555;font-weight:bold;">* Come across any cool kinetic holiday campaigns? Let me know! *</span></p><br><br>


                                                <table width="100%" cellpadding="0" border="0" cellspacing="0">
                                                    <tr>
                                                        <td style="padding:15px 0px;">
                                                            <a href="https://www.campaignmonitor.com/resources/guides/7-email-marketing-predictions-for-2017/?utm_referrer=freshinbox.com"><img src="http://freshinbox.com/images/newsletters/20161227-alexwilliams.png" width="580" style="display:block;width:100%;" border="0"></a>
                                                        </td>
                                                    </tr>
                                                </table>


                                                <h2 style="color: #333333; font-weight:normal; font-family: 'Helvetica Neue', Helvetica; font-size: 22px;margin: 15px 0 10px; padding: 0"> <a href="https://www.campaignmonitor.com/resources/guides/7-email-marketing-predictions-for-2017/?utm_referrer=freshinbox.com" style="color: #348eda;text-decoration:none;">Campaign Monitor's Email Marketing Experts Predictions for 2017</a></h2>

                                                <p style="font-family: 'Helvetica Neue', Helvetica; font-size: 16px;line-height:1.4;color:#5f5f5f;">
                                                    Trendline's Alex Williams makes another bold prediction. (His <a href="https://www.campaignmonitor.com/resources/guides/email-marketing-predictions-2016/" style="color: #348eda;text-decoration:none;">2016 prediction</a> on
                                                    Gmail's responsive email support was spot on). I wrote a piece earlier on why Apple Pay for the Web will be a <a href="https://www.emailonacid.com/blog/article/industry-news/why-apple-pay-for-the-web-is-good-news-for-mobile-email"
                                                                                                                                                                     style="color: #348eda;text-decoration:none;">big deal for email</a>.</p><br><br><br>


                                                <h3 style="color: #333333; font-weight:bold; font-family: 'Helvetica Neue', Helvetica; font-size: 18px;margin: 20px 0 10px; padding: 0">Other</h3>


                                                <table width="100%" cellpadding="0" border="0" cellspacing="0">
                                                    <tr>
                                                        <td style="padding:10px 0px;">
                                                            <a href="http://freshinbox.com/resources/techniques.php"><img src="http://freshinbox.com/images/newsletters/20161227-techniques.png" width="550" style="display:block;width:100%;" border="0"></a>
                                                        </td>
                                                    </tr>
                                                </table>

                                                <p style="font-family: 'Helvetica Neue', Helvetica; font-size: 16px;line-height:1.4;color:#5f5f5f;">
                                                    <a href="http://freshinbox.com/resources/techniques.php" style="color: #348eda;text-decoration:none;">Updated Interactive Techniques Page</a><br> I updated the FreshInbox interactive techniques page to feature the latest
                                                    techniques and tips. The <a href="http://freshinbox.com/resources/css.php" style="color: #348eda;text-decoration:none;">kinetic CSS support</a> page has been updated as well.
                                                </p><br>


                                                <table width="100%" cellpadding="0" border="0" cellspacing="0">
                                                    <tr>
                                                        <td style="padding:10px 0px;">
                                                            <a href="http://freshinbox.com/blog/css-in-email-star-wars-edition/"><img src="http://freshinbox.com/images/newsletters/20161227-starwars.png" width="550" style="display:block;width:100%;" border="0"></a>
                                                        </td>
                                                    </tr>
                                                </table>


                                                <p style="font-family: 'Helvetica Neue', Helvetica; font-size: 16px;line-height:1.4;color:#5f5f5f;">
                                                    <a href="http://freshinbox.com/blog/css-in-email-star-wars-edition/" style="color: #348eda;text-decoration:none;">Animated Star Wars Imperial Walker in Email</a><br> If you've seen Rogue One, you might get a kick out of this
                                                    year old CSS in email example.
                                                </p>


                                                <br><br><br>


                                                <p style="font-family: 'Helvetica Neue', Helvetica; font-size: 17px;line-height:1.4;color:#555555;font-weight:bold;display:block;padding:10px;background-color:#eeeeee;">

                                                    Do you send emails with variations of content?<br>Having trouble proofing and reviewing these campaigns?<br>
                                                    <a href="http://campaignworkhub.com?utm=newsletter10" style="color: #348eda;">Here's the solution...</a>

                                                </p>

                                                <br><br><br>


                                                <p style="font-family: 'Helvetica Neue', Helvetica; font-size: 16px;line-height:1.4;color:#333333;">
                                                    -- Justin<br>


                                                    <a href="https://www.twitter.com/freshinbox" title="Follow FreshInbox on Twitter"><img alt="Follow FreshInbox on Twitter" src="http://freshinbox.com/images/social-twitter.gif" border="0"></a>
                                                    <a href="https://www.facebook.com/thefreshinbox" title="FreshInbox on Facebook"><img alt="FreshInbox on Facebook" src="http://freshinbox.com/images/social-fb.gif" border="0"></a>
                                                </p>

                                                <br><br>


                                            </td>
                                        </tr>
                                    </table>
                                    <!-- /inner content -->
                                </td>
                            </tr>
                        </table>


                    </div>
                    <!-- /content -->

                </td>
                <td style="font-size:0;"></td>
            </tr>
        </table>
        <!-- /body -->
        <!-- footer -->
        <table class="footer-wrap" style="clear: both !important; font-family: 'Helvetica Neue', Helvetica; margin: 0; padding: 0; width: 100%">
            <tr>
                <td style="font-family: 'Helvetica Neue', Helvetica; margin: 0; padding: 0"></td>
                <td class="container" style="clear: both !important; display: block !important; font-family: 'Helvetica Neue', Helvetica; margin: 0 auto; max-width: 600px !important; padding: 0">

                    <!-- content -->
                    <!-- /content -->

                </td>
                <td></td>
            </tr>
        </table>
        <!-- /footer -->

        <!--[if !mso]><!-- -->

        <div class="animation" style="display:none;max-height:0px;overflow:hidden;">
            <center>
                <div class="happynewyear">
                    Happy New Year<br>Email Geeks!
                </div>
            </center>
            <div class="f1">
                <div class="starcont">
                    <div class="starcontinner">
                        <div class="star s1"></div>
                        <div class="star s2"></div>
                        <div class="star s3"></div>
                        <div class="star s4"></div>
                        <div class="star s5"></div>
                        <div class="star s6"></div>
                        <div class="star s7"></div>
                        <div class="star s8"></div>
                        <div class="star s9"></div>
                        <div class="star s10"></div>
                    </div>
                </div>
            </div>
            <div class="f2">
                <div class="starcont">
                    <div class="starcontinner">
                        <div class="star s1"></div>
                        <div class="star s2"></div>
                        <div class="star s3"></div>
                        <div class="star s4"></div>
                        <div class="star s5"></div>
                        <div class="star s6"></div>
                        <div class="star s7"></div>
                        <div class="star s8"></div>
                        <div class="star s9"></div>
                        <div class="star s10"></div>
                    </div>
                </div>
            </div>
            <div class="f3">
                <div class="starcont">
                    <div class="starcontinner">
                        <div class="star s1"></div>
                        <div class="star s2"></div>
                        <div class="star s3"></div>
                        <div class="star s4"></div>
                        <div class="star s5"></div>
                        <div class="star s6"></div>
                        <div class="star s7"></div>
                        <div class="star s8"></div>
                        <div class="star s9"></div>
                        <div class="star s10"></div>
                    </div>
                </div>
            </div>
            <div class="f4">
                <div class="starcont">
                    <div class="starcontinner">
                        <div class="star s1"></div>
                        <div class="star s2"></div>
                        <div class="star s3"></div>
                        <div class="star s4"></div>
                        <div class="star s5"></div>
                        <div class="star s6"></div>
                        <div class="star s7"></div>
                        <div class="star s8"></div>
                        <div class="star s9"></div>
                        <div class="star s10"></div>
                    </div>
                </div>
            </div>
            <div class="f5">
                <div class="starcont">
                    <div class="starcontinner">
                        <div class="star s1"></div>
                        <div class="star s2"></div>
                        <div class="star s3"></div>
                        <div class="star s4"></div>
                        <div class="star s5"></div>
                        <div class="star s6"></div>
                        <div class="star s7"></div>
                        <div class="star s8"></div>
                        <div class="star s9"></div>
                        <div class="star s10"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--<![endif]-->


    </div>
    <!-- outer -->

</div>
<center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="canspamBarWrapper" style="background-color:#FFFFFF; border-top:1px solid #E5E5E5;">
        <tr>
            <td align="center" valign="top" style="padding-top:20px; padding-bottom:20px;">
                <table border="0" cellpadding="0" cellspacing="0" id="canspamBar">
                    <tr>
                        <td align="center" valign="top" style="color:#606060; font-family:Helvetica, Arial, sans-serif; font-size:11px; line-height:150%; padding-right:20px; padding-bottom:5px; padding-left:20px; text-align:center;">
                            This email was sent to <a href="mailto:" target="_blank" style="color:#404040 !important;">xxxxx@xxxx.xxx</a>
                            <br>
                            <a href="http://freshinbox.us3.list-manage.com/about?u=19a47edc5e37777e5911b3c46&id=c7b59d4406&e=979f78cff3&c=aada2b0fcc" target="_blank" style="color:#404040 !important;"><em>why did I get this?</em></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"
                                                                                                                                                                                                                                                                   style="color:#404040 !important;">unsubscribe from this list</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" style="color:#404040 !important;">update subscription preferences</a>
                            <br> FreshInbox &middot; 142 N. Milpitas Blvd #189 &middot; Milpitas, California 95035 &middot; USA
                            <br>
                            <br>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <style type="text/css">
        @media only screen and (max-width: 480px){
            table#canspamBar td{font-size:14px !important;}
            table#canspamBar td a{display:block !important; margin-top:10px !important;}
        }
    </style>
</center>
</body>
</body>

</html>
