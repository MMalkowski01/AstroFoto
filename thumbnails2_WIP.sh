#!/bin/bash
for img in input/*.png; do
filename=$(basename "$img")

#convert $img -resize 128 -quality 60 output/$img-thumbnail.png
magick convert input/$img -resize 64 -quality 92 output/$img.jpg

#magick convert $img -resize 128 -quality 60 $img-thumbnail.jpg

echo "$img thumbnail created" >> output/test.txt

done

#exit