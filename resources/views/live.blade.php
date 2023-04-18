<!doctype html>
<html>
    <head>
        <title>{{ $streaming->name }} | En vivo</title>
        <style>
            body{
                padding: 0px;
                margin: 0px;
            }
            video {
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div>
            <video id="videoPlayer" autoplay="true" controls></video>
        </div>
        <script src="{{ asset('js/dash.all.min.js') }}"></script>
	<script>
            (function(){
                var url = "{{ $streaming->server->name }}/dash/{{ $streaming->id }}.mpd";
                var player = dashjs.MediaPlayer().create();
                player.initialize(document.querySelector("#videoPlayer"), url, true);
                player.updateSettings({ 'streaming': { 'delay': { 'liveDelay': 12 } } });
            })();
        </script>
    </body>
</html>