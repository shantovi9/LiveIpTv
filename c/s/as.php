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
            <source src="http://103.209.173.14:9993/gulicraft/gAAAAABkxoCmrKQBIcE5wBePfVtQR1icjd55DoHbXVceJi6Q_jSmCZsam2xtXF87FwIj7QquMMhzS8Kin8AdJKxk5j4rMofcaw==/index.m3u8" type="application/x-mpegURL">
            Your browser does not support the video tag.
        </video>
    </div>
    <script src="script.js"></script>
</body>
</html>


<?php include 'footer.php'; ?>
