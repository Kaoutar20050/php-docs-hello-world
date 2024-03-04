<?php

echo "kaoutar oumayma!";

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


