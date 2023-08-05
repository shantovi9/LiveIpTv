<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Video Player</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="video-container">
        <video id="videoPlayer" controls>
            <!-- Replace the source with your m3u8 link -->
            <source src="http://198.16.100.90:8278/tiankongcricket/playlist.m3u8?tid=MF0F2840305428403054&ct=19225&tsum=b212d3a5e0f928f816ba4653a3b31f6d" type="application/x-mpegURL">
            Your browser does not support the video tag.
        </video>
    </div>
    <script src="script.js"></script>
</body>
</html>


<?php include 'footer.php'; ?>
