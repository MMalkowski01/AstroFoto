#!/bin/bash
mogrify -path Thumbnails -resize 128 -quality 60 Pictures/*.png
mogrify -path Thumbnails -resize 128 -quality 60 Pictures/*.jpg
mogrify -path Thumbnails -resize 128 -quality 60 Pictures/*.jpeg

