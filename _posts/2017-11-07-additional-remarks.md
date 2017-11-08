---
layout: "post"
title: "Additional Remarks"
---

Some Benchmarking scraped from: http://www.baschny.de/graphic-test/summary.html

Resizing [this image](http://www.baschny.de/graphic-test/amsterdam.jpg), originally 2272px by 1704px to a 150x150 thumbnail.

| Lib               | Time To Resize |
|:------------------|---------------:|
| ImageMagick 6.0.7 | 0.48s          |
| gd 2.0.28         | 6.60s          |
|                   |                |

![Amsterdam](http://www.baschny.de/graphic-test/amsterdam.jpg-150-75-IM6.jpg)

What is GraphicsMagick?
[Don't bother. :)](https://stackoverflow.com/questions/5282072/gd-vs-imagemagick-vs-gmagick-for-jpg)

It's a fork of ImageMagick.

> As far as I can see, GMagick comes with no new features; the fork is concentrating on better performance and stability, which as @Col says you should test and compare yourself.

> ...GMagick does not have whatever new features were added to IM since version 5.5.2. It may be worth checking out the ImageMagick change logs whether you're missing out on anything you need.

# Lastly!

A really great trove of ImageMagick tutorials is available at [http://phpimagick.com/Tutorial](http://phpimagick.com/Tutorial)
