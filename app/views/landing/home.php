<style>
    #home {
        background: url("/images/banner2.png") center;
        height: 94vh;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const video = document.querySelector('video');

        video.play().catch(() => {
            video.muted = true;
            video.play();
        });

        video.addEventListener('ended', () => {
            video.currentTime = 0;
            video.play();
        });
    });

</script>

<div id="home" style="background-size: cover"></div>
