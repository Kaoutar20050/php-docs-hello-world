<?php

echo "<html>
    <body>
        <h1><strong><center><i><span style="color:rgb(36, 196, 33)">WEHELP DEVLOPMENT</span></i></strong> </h1>
           <strong><center><image src="interface de page.jpg"whidth="250" height="200"/>  </strong> 
    </body>
</html>
<html>
    <body>
        <h1><strong><center><i><SPAN style="color:black">TRANSFORMATION</SPAN><span style="color:rgb(36, 196, 33)"> DIGITAL </span></i></strong> </h1>
        <h3><strong><center><i><SPAN style="color:black">DIGITAL MARKETING & IT SOLUTIONS</SPAN></i></strong> </h3>
           <h1><i><span style="color:rgb(36, 196, 33)">MARKETING</span> ET <span style="color:rgb(36, 196, 33)">DEVLOPMENT</span>,<span style="color:rgb(36, 196, 33)">BRANDING</span></i></h1> 
        </body>
</html>
<html>
    <body>
        <h2><i><img src="phone.jpg" width="28" height="28">+212661458144 </i> <i><img src="email.jpg"width="28" height="28">CONTACT@WEHELP.MA</i></h2>
        <h2><i><img src="web.jpg"width="28" height="28">WWW.WEHELP.MA</i> <i><img src="position.jpg"height="28" width="28">N° 22 RUE SEBOU VN MEKNES</i></h2>
    </body>
</html";

#!/bin/bash

# Set your GitHub username here
GITHUB_USERNAME="your_github_username"

# Fetch a random cat image from The Cat API
CAT_IMAGE_URL=$(curl -s https://api.thecatapi.com/v1/images/search | jq -r '.[0].url')

# Create a 400x400 image with a transparent background
convert -size 400x400 xc:none github_profile_image.png

# Add your GitHub username to the image
convert github_profile_image.png -gravity center -fill white -pointsize 48 -annotate 0 "${GITHUB_USERNAME}" github_profile_image.png

# Overlay the cat image on your username image
convert github_profile_image.png \( ${CAT_IMAGE_URL} -resize 400x400 \) -gravity center -compose over -composite github_profile_image.png

echo "Image generated: github_profile_image.png"


