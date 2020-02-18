<html>
<head>
    <title>Video</title>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900&display=swap);
        * { margin: 0; padding: 0; }
        img { max-width: 100%; height: auto; }
        .video-header {
            padding: 44px 40px 84px 40px;
        }
        .video-section {
            background: #ebeaea;
            height: 100%;
            padding: 40px;
        }
        .video-header .close-window-text a {
            color: #0b2848;
            text-decoration: none;
            text-transform: uppercase;
            margin-right: 5px;
            cursor: pointer;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: bold;
            letter-spacing: 1px;
            position: relative;
            bottom: 2px;
        }
        .video-header .close-window-text a:hover {
            color: #2a71c4;
        }
        .video-header .video-header-logo {
            width: 100%;
            max-width: 350px;
            float: left;
        }
        .video-header .video-close-window {
            float: right;
            position: relative;
            top: 10px;
        }
    </style>
</head>
<body class="video-body">
<header class="video-header">
    <div class="video-header-logo">
        <img src="/wp-content/plugins/patient-procedures-anatomy/img/horizontal-logo.jpg" alt="CC4PM">
    </div>
    <div class="video-close-window">
        <span class="close-window-text"><a onClick="javascript:window.close();">Close Window</span></a> <a onClick="javascript:window.close();"><span class="close-window-x"><img src="/wp-content/plugins/patient-procedures-anatomy/img/close-menu.svg" alt="Close Icon"></span></a></div>
    </div>
</header>
<div class="video-section">

    <div class="video-container">
        <!-- ViewMedica Embed Start --> <div id="vm"></div>         <script type="text/javascript" src="https://www.swarminteractive.com/js/vm.js"></script> <script type="text/javascript">client="333"; width=720; vm_open();         </script>
        <!-- ViewMedica Embed End -->
    </div>
</div>
</body>
</html>