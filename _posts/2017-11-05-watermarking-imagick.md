---
layout: "post"
title: "Watermarking with Imagick"
---

# Imagick

From [Wiki][imagick]:

> ImageMagick is a free and open-source software suite for displaying,
  converting, and editing raster image and vector image files. It can read and
  write over 200 image file formats.

ImageMagick's first release was in 1990; 27 years ago. The most recent stable
release was July 2017.

I really love that it autodetects whatever's on the machine it's running from. I
can specify the *Impact* font.

## Relevant ImageMagick classes & methods.

  * [`class Imagick`][imagickclass] &mdash; takes a filepath, glob, or array of
    paths as constructor argument.
    * [`::writeImage`][imagick-writeimage] &mdash;  takes a path, and writes the
      image data to a new filepath. Also see
      [`::writeImageFile`][imagick-writeimagefile] if you have a file `resource`
      var you'd rather use!
    * [`::drawImage`][imagick-drawimage] &mdash; Renders the ImagickDraw object
      on the current image.
  * [`class ImagickDraw`][imagicdrawclass] &mdash; SVG-style drawing class.
    Drawings can be rasterized into a non-svg image file or exported as SVG.
    * `::set*` set various attributes of the drawing. Font, stroke, fill, alpha,
      clip, etc.

Here is what watermarking looks like with ImageMagick.

{% highlight php %}{% include_relative snippets/watermarking_2.php %}{% endhighlight %}

*./assets/images/modified/leaf_2.jpg*

![A Leaf, with markup data.](./assets/images/modified/leaf_2.jpg)

[imagick]: https://en.wikipedia.org/wiki/ImageMagick
[imagickclass]: http://php.net/manual/en/class.imagick.php
[imagick-drawimage]: http://php.net/manual/en/imagick.drawimage.php
[imagick-writeimage]: http://php.net/manual/en/imagick.writeimage.php
[imagick-writeimagefile]: http://php.net/manual/en/imagick.writeimagefile.php
[imagicdrawclass]: http://php.net/manual/en/class.imagickdraw.php

