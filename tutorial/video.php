<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Video Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        .video-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 20px;
        }
        .video-card {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 8px;
            background: #f9f9f9;
        }
        video {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .video-title {
            font-weight: bold;
            margin-top: 10px;
        }
        .video-desc {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <h2>Admin Video Upload</h2>
    <div class="video-container">
        <div class="video-card">
            <video controls>
                <source src="video1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-title">Video 1</div>
            <div class="video-desc">This is a short description of the video content.</div>
        </div>
        <div class="video-card">
            <video controls>
                <source src="video2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-title">Video 2</div>
            <div class="video-desc">Learn more about this topic in this tutorial.</div>
        </div>
        <div class="video-card">
            <video controls>
                <source src="video3.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-title">Video 3</div>
            <div class="video-desc">An informative session on important concepts.</div>
        </div>
        <div class="video-card">
            <video controls>
                <source src="video4.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-title">Video 4</div>
            <div class="video-desc">Understand the basics with this tutorial.</div>
        </div>
    </div>
</body>
</html>
