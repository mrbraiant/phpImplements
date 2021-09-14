<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>\o/ PHP HTML \o/</title>
    <style>

    </style>
</head>
<body>
    <?php 
    //testing with Youtube Normal Link
    $url_video = "https://www.youtube.com/watch?v=FXcxPri6Epo";
    
    //testing simulating .mp4 video
    //$url_video = "NormalVideo.mp4";

    if (strstr($url_video, "youtu")){
        //Converting any YouTube URL and preparing to be embed
        $parameterYT = "https://www.youtube.com/embed/";
        $getID = substr($url_video, -11);
        //Setting autoplay, with mute, invisible controls and with loop like Youtube API
        $configYTVideo = "?autoplay=1&showinfo=0&mute=1&rel=0&controls=0&loop=1&playlist=";
    ?>
        <iframe id="YouTube" src="<?php echo $parameterYT.$getID.$configYTVideo.$getID ?>" width="500" height="500" frameborder="0"></iframe>        
    <?php } else{ 
    ?>
        <!-- if it would be in html tag, but just printing $url_video -->
        <!--<video class="rect" muted="" autoplay="" loop="" src="<?php //echo $url_video; ?>"></video>-->
        <p><?php echo $url_video ?></p>
    <?php } 
    ?>
</body>
</html>