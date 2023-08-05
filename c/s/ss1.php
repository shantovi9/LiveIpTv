
<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Video Player</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <div class="video-container">
        <video id="videoPlayer" controls>
            <!-- Replace the source with your m3u8 link -->
            <source src="https://webudit.cdnhks.lol/lb/premium370/index.m3u8?|Referer=https://streamservicehd.click/&e=.m3u8/&user-agent=Android" type="application/x-mpegURL">
            Your browser does not support the video tag.
        </video>
    </div>
    <script src="https://vjs.zencdn.net/7.15.4/video.js"></script>
</body>
</html>

<?php include 'footer.php'; ?>

