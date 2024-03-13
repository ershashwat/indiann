    <?php //session_start();
    error_reporting(0);

    $s_email=$_SESSION['email'];?>



    <!doctype html>
    <html>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="obYqyxxmuhzfq1JbBnkTFjoOV3dW7bQdcKQeaEm9">
        <title>Indian Steel Association </title>
        <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap%404.0.0/dist/css/bootstrap.min.css">
        <link rel='stylesheet' href='cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css'>
        <link rel='stylesheet' href='cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css'>
        <script src="https://cdn.tailwindcss.com/"></script>
        <link rel="stylesheet" href="frontend/style.html">
        <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Noto%20Sans" rel="stylesheet">
        <link rel="stylesheet" href="frontend/slider.css">
        <link href="frontend/main.dd7b571f.css" rel="stylesheet">

        <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="cdn.jsdelivr.net/npm/%40fancyapps/fancybox%403.5.7/dist/jquery.fancybox.min.css">
        <style>
            #sync2 .current .slider_item_container {
                background: #f7f7f7 !important;
            }

            .owl-theme .owl-nav {
                /*default owl-theme theme reset .disabled:hover links */
            }

            .owl-theme .owl-nav [class*=owl-] {
                transition: all 0.3s ease;
            }

            .owl-theme .owl-nav [class*=owl-].disabled:hover {
                background-color: #f8f8f8;
            }

            #sync1.owl-theme {
                position: relative;
            }

            #sync1.owl-theme .owl-next,
            #sync1.owl-theme .owl-prev {
                width: 22px;
                height: 40px;
                margin-top: -20px;
                position: absolute;
                top: 50%;
            }

            #sync1.owl-theme .owl-prev {
                left: 10px;
            }

            #sync1.owl-theme .owl-next {
                right: 10px;
            }

            /* ! tailwindcss v3.3.3 | MIT License | https://tailwindcss.com */
            *,
            ::after,
            ::before {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb
            }

            ::after,
            ::before {
                --tw-content: ''
            }

            html {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                tab-size: 4;
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-feature-settings: normal;
                font-variation-settings: normal
            }

            body {
                margin: 0;
                line-height: inherit
            }

            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px
            }

            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: inherit;
                font-weight: inherit
            }

            a {
                color: inherit;
                text-decoration: inherit
            }

            b,
            strong {
                font-weight: bolder
            }

            code,
            kbd,
            pre,
            samp {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                font-size: 1em
            }

            small {
                font-size: 80%
            }

            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline
            }

            sub {
                bottom: -.25em
            }

            sup {
                top: -.5em
            }

            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse
            }

            button,
            input,
            optgroup,
            select,
            textarea {
                font-family: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                font-size: 100%;
                font-weight: inherit;
                line-height: inherit;
                color: inherit;
                margin: 0;
                padding: 0
            }

            button,
            select {
                text-transform: none
            }

            [type=button],
            [type=reset],
            [type=submit],
            button {
                -webkit-appearance: button;
                background-color: transparent;
                background-image: none
            }

            :-moz-focusring {
                outline: auto
            }

            :-moz-ui-invalid {
                box-shadow: none
            }

            progress {
                vertical-align: baseline
            }

            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
                height: auto
            }

            [type=search] {
                -webkit-appearance: textfield;
                outline-offset: -2px
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit
            }

            summary {
                display: list-item
            }

            blockquote,
            dd,
            dl,
            figure,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
            p,
            pre {
                margin: 0
            }

            fieldset {
                margin: 0;
                padding: 0
            }

            legend {
                padding: 0
            }

            menu,
            ol,
            ul {
                list-style: none;
                margin: 0;
                padding: 0
            }

            dialog {
                padding: 0
            }

            textarea {
                resize: vertical
            }

            input::placeholder,
            textarea::placeholder {
                opacity: 1;
                color: #9ca3af
            }

            [role=button],
            button {
                cursor: pointer
            }

            :disabled {
                cursor: default
            }

            audio,
            canvas,
            embed,
            iframe,
            img,
            object,
            svg,
            video {
                display: block;
                vertical-align: middle
            }

            img,
            video {
                max-width: 100%;
                height: auto
            }

            [hidden] {
                display: none
            }

            *,
            ::before,
            ::after {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / 0.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia:
            }

            ::backdrop {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / 0.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia:
            }

            .container {
                width: 100%
            }

            @media (min-width: 640px) {
                .container {
                    max-width: 640px
                }
            }

            @media (min-width: 768px) {
                .container {
                    max-width: 768px
                }
            }

            @media (min-width: 1024px) {
                .container {
                    max-width: 1024px
                }
            }

            @media (min-width: 1280px) {
                .container {
                    max-width: 1280px
                }
            }

            @media (min-width: 1536px) {
                .container {
                    max-width: 1536px
                }
            }

            .sr-only {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                border-width: 0
            }

            .collapse {
                visibility: collapse
            }

            .float-right {
                float: right
            }

            .float-left {
                float: left
            }

            .m-3 {
                margin: 0.75rem
            }

            .mx-2 {
                margin-left: 0.5rem;
                margin-right: 0.5rem
            }

            .mx-auto {
                margin-left: auto;
                margin-right: auto
            }

            .my-2 {
                margin-top: 0.5rem;
                margin-bottom: 0.5rem
            }

            .mb-4 {
                margin-bottom: 1rem
            }

            .ml-auto {
                margin-left: auto
            }

            .mt-0 {
                margin-top: 0px
            }

            .mt-2 {
                margin-top: 0.5rem
            }

            .mt-4 {
                margin-top: 1rem
            }

            .mt-5 {
                margin-top: 1.25rem
            }

            .p-3 {
                padding: 0.75rem
            }

            .p-5 {
                padding: 1.25rem
            }

            .px-0 {
                padding-left: 0px;
                padding-right: 0px
            }

            .px-1 {
                padding-left: 0.25rem;
                padding-right: 0.25rem
            }

            .px-2 {
                padding-left: 0.5rem;
                padding-right: 0.5rem
            }

            .px-3 {
                padding-left: 0.75rem;
                padding-right: 0.75rem
            }

            .py-1 {
                padding-top: 0.25rem;
                padding-bottom: 0.25rem
            }

            .py-2 {
                padding-top: 0.5rem;
                padding-bottom: 0.5rem
            }

            .py-4 {
                padding-top: 1rem;
                padding-bottom: 1rem
            }

            .py-5 {
                padding-top: 1.25rem;
                padding-bottom: 1.25rem
            }

            .pb-4 {
                padding-bottom: 1rem
            }

            .pl-8 {
                padding-left: 2rem
            }

            .pr-0 {
                padding-right: 0px
            }

            .pt-2 {
                padding-top: 0.5rem
            }

            .text-left {
                text-align: left
            }

            .text-center {
                text-align: center
            }

            .text-right {
                text-align: right
            }

            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .container .main_header__title {
                position: relative;
                height: 50px;
                vertical-align: baseline;
                color: #369593;
                text-transform: uppercase;
                font-size: 1.5em;
                margin-left: 1%;
            }

            .container .container__title {
                position: relative;
                height: 30px;
                vertical-align: baseline;
                font-size: 0.9em;
                font-weight: 400;
                color: #f6f6f6;
                text-transform: uppercase;
                border-bottom: 1px solid #f9f9f9;
            }

            .container .box:hover,
            .container .add_box:hover {
                box-shadow: 15px 15px 13px rgba(85, 85, 85, 0.3);
                transition: 0.4s;
                transform: translate(-1%, -1%);
            }

            .container .box,
            .container .add_box {
                position: relative;
                height: 240px;
                box-shadow: 3px 3px 10px rgba(85, 85, 85, 0.5);
                border-radius: 8px;
                margin-bottom: 30px;
                transition: 1s;
            }

            .container .box a:hover .box__title,
            .container .add_box a:hover .box__title {
                height: 35%;
                transition: 1s;
            }

            .container .box a:hover .box__title p,
            .container .add_box a:hover .box__title p {
                opacity: 1;
            }

            .container .box img,
            .container .add_box img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 8px;
            }

            .container .box .box__title,
            .container .add_box .box__title {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 50px;
                background-color: #F6F6F6;
                border-radius: 0 0 8px 8px;
                vertical-align: middle;
                transition: 0.5s;
                transition-timing-function: ease-out;
            }

            .container .box .box__title p,
            .container .add_box .box__title p {
                opacity: 0;
                text-align: center;
                color: #000;
                font-size: 0.8em;
                margin: 0;
                transition-delay: 0.2s;
                transition: 0.2s;
                transition-timing-function: ease-out;
            }

            .container .box .box__title h6,
            .container .add_box .box__title h6 {
                text-align: center;
                color: #000;
                text-transform: uppercase;
                margin: 7% 0 0 0;
                font-size: 0.9em;
            }

            .container .add_box {
                background-color: #f9f9f9;
            }

            .container .add_box a {
                position: absolute;
                width: 100%;
                height: 100%;
            }

            .container .add_box svg {
                display: block;
                margin: auto;
                margin-top: 23.5%;
                transition: 0.3s;
                transition-timing-function: ease-out;
            }

            .container .add_box .add_box__title {
                position: absolute;
                width: 100%;
                text-align: center;
                color: #bababa;
                top: 60%;
            }

            .container .add_box .add_box__title h6 {
                text-transform: uppercase;
            }

            .container .add_box a:hover svg {
                margin-top: 21.5%;
            }
        </style>

        <script async="" src="platform.twitter.com/widgets.js"></script>
        <script charset="utf-8" src="platform.twitter.com/js/timeline.16b53cc33aaa562f8f41a495bf720289.js"></script>
    </head>

    <body>
        <div id="root">
            <div>
                <header>
                    <nav class="container navbar navbar-expand-lg navbar-light"><a class="navbar-brand" href="indiann.php"><img id="header_logo" src="assets/logo.png" alt="ISA Logo "></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="vision.php">About <span class="sr-only">(current)</span></a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href="members.php">Our Members</a></li> -->
                                <li class="nav-item"><a class="nav-link" href="governance-all.php">Governance</a></li>
                            
                                <!--<li class="nav-item"><a class="nav-link" href="apex-committee.php">Committees</a></li>-->
                                <!-- <li class="nav-item dropdown show">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Committees</a>
                                        <div class="dropdown-menu ">
                                            <a class="dropdown-item" href="apex-committee.php">Apex Committee</a>
                                            <a class="dropdown-item" href="working-committee.php">Working Committee</a>
                                            <a class="dropdown-item" href="vishakha-committee.php">Vishakha Committee</a>
                                            <a class="dropdown-item" href="other-committee.php">Other Committees</a>
                                        </div>
                                    </li> -->



                                    <?php 
                                    //$select= "SELECT * FROM member WHERE `email`=$s_email A"
                                    ?>
                                    <input type="hidden" id="hid" value="<?php echo $_SESSION['role']?>">
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="committee">Committees</a>
                                        <div class="dropdown-menu" id="dropdownMenu">
                                            <a class="dropdown-item" href="apex-committee.php">Apex Committee</a>
                                            <a class="dropdown-item" href="working-committee.php">Working Committee</a>
                                            <a class="dropdown-item" href="vishakha-committee.php">Vishakha Committee</a>
                                            <a class="dropdown-item" href="other-committees.php">Other Committees</a>
                                        </div>
                                    </li>


                                <li class="nav-item"><a class="nav-link" href="steel-trends.php">Statistics
                                    </a></li>

                                <!-- <li class="nav-item"><a class="nav-link" href="media/inTheNews.html">Media</a></li> -->
                                <li class="nav-item"><a class="nav-link" href="knowledge-bank.php">Knowledge Bank</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href="govtNotifications/ForeignTradePolicy.html">Govt. Notifications</a></li> -->
                                <li class="nav-item"><a class="nav-link" href="#">
                                        <button class="Extranet-btn mx-2 px-2 py-2">Dashboard</button>
                                    </a></li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="logout.php">
                                            <button class="Extranet-btn px-2 py-2">
                                                <?php
                                                session_start(); ?>
                                            <?php echo  !empty($_SESSION['email'])?$s_email:'Login' ?></button> </a>
                                    </li>
    
                            </ul>
                        </div>
                    </nav>
    </header>
        <script>

        var hid = document.getElementById('hid').value;
        var dropdownMenu = document.getElementById('dropdownMenu');
        var dropdownItems = dropdownMenu.getElementsByClassName('dropdown-item');
        var dropdownTextArray = [];
        for (var i = 0; i < dropdownItems.length; i++) {
        var textContent = dropdownItems[i].textContent.trim();
        dropdownTextArray.push(textContent);
    }
    //console.log(dropdownTextArray);

    if (dropdownTextArray.indexOf(hid) !== -1) {
        var indiansteel = dropdownTextArray.indexOf(hid);
        console.log(indiansteel);

        var filteredArray = dropdownTextArray.filter(function(element, idx) {
            return idx >= indiansteel;
        });

        console.log(filteredArray);
        var dropdownMenu1 = document.getElementById('dropdownMenu');

    // Clear existing dropdown items
    dropdownMenu1.innerHTML = '';

    // Loop through the array and create dropdown items
    filteredArray.forEach(function(value) {
        var newItem = document.createElement("a");
            newItem.setAttribute("class", "dropdown-item");
            newItem.style.cursor = 'pointer'; // Set cursor pointer style
            newItem.setAttribute("href", value.toLowerCase().replace(/\s+/g, '-'));

    
            newItem.textContent = value;
            newItem.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default behavior of the link
            var clickedValue = event.target.textContent; // Get the text content of the clicked item
            var hrefValue = event.target.getAttribute("href");
            console.log('Clicked value:', clickedValue);
            console.log('Href  value:', hrefValue);
            comm_value(clickedValue,hrefValue);
        //     var filename = hrefValue.pop(); // Split by '/' and get the last part
        // console.log('Filename:', filename);
            // You can perform further actions with the clicked value here
        });
        // Append the new dropdown item to the dropdown menu
        dropdownMenu.appendChild(newItem);
    });

    } else {
        console.log("Value does not exist in the array.");
    }

    function comm_value(chk_val,href)
    {
    
    var id=chk_val;
    var link=href;
    //  alert (link);
    //  alert (id);
            $.ajax({
                    url: href+'.php', // URL of your PHP script
                    method: 'POST', // HTTP method (POST or GET)
                    datatype:'html',
                    data: { 
                        id: id,
                        link: link // Data to be sent to the server
                    },
                    success: function(response) {
                        // Handle successful response
                        console.log('Response from server:', response);
                        $('#root').html(response);
                        // You can update your HTML with the response here
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        console.error('Error:', error);
                    }
                });
    }
    </script>