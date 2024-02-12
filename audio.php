

<audio src="$notify" id="audio" controls style="display: none;"></audio>

<button type="button" onclick="playaudio();">play audio</button>

<script>
    function playaudio(){
        document.getElementById("audio").play();
    }
</script>