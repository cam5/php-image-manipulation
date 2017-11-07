---
layout: post
title:  "Watermarking"
---

We've got a nice photo of a leaf, here.

I found it via Flickr's [creative commons search filter][flickr-search]!

It's cool (and more SEO friendly to them) to credit the photographer with a
rich text approach, but for this contrived example, we can have a look at
embedding their info directly into the image!

![A Leaf](./assets/images/leaf.jpg)

# GD

From [Wiki][gd]:

> The GD Graphics Library is a graphics software library by Thomas Boutell and
  others for dynamically manipulating images. Its native programming language is
  ANSI C, but it has interfaces for many other programming languages. It can
  create GIFs, JPEGs, PNGs, and WBMPs.

GD's first release was in 1994; 23 years ago. It's most recent stable release
was in January 2017.

> GD is extensively used with PHP, where a modified version supporting
  additional features is included by default as of PHP 4.3 and was an option
  before that. As of PHP 5.3, a system version of GD may be used as well, to get
  the additional features that were previously available only to the bundled
  version of GD.

Let's have a go at watermarking with the php interface to the GD library.

Trivia: GD originally stood for "GIF Draw". However, since the revoking of the Unisys license, it has informally stood for "Graphics Draw".

## Relevant GD Functions

  * [`imagecreatefromjpeg`][imagecreatefromjpeg] &mdash; Create a new image from
    file or URL.<br /> `@return` an image resource identifier on success, `FALSE` on
    errors.
    * It has cousins: `imagecreatefrom(gif|png|wbmp|webp|string)`
  * [`imagettftext`][imagettftext] Write text to the image using TrueType fonts
  * [`imagejpeg`][imagejpeg] &mdash; Output image to <s>browser or</s> file
  * [`imagecolorallocate`][imagecolorallocate] &mdash; Given RGB, translate into
    a color index that GD can work with.


We might try something like the following, to start:

{% highlight php %}{% include_relative snippets/watermarking_1.php %}{% endhighlight %}

*./assets/images/modified/leaf_1.jpg*

![A Leaf, with markup data.](./assets/images/modified/leaf_1.jpg)

# Imagick

{% highlight php %}{% include_relative snippets/watermarking_2.php %}{% endhighlight %}

*./assets/images/modified/leaf_2.jpg*

![A Leaf, with markup data.](./assets/images/modified/leaf_2.jpg)



[gd]: https://en.wikipedia.org/wiki/GD_Graphics_Library
[flickr-search]: https://www.flickr.com/search/?styles=depthoffield&media=photos&orientation=landscape&license=2%2C3%2C4%2C5%2C6%2C9&text=ontario&advanced=1
[imagecreatefromjpeg]: http://php.net/manual/en/function.imagecreatefromjpeg.php
[imagettftext]: http://php.net/manual/en/function.imagettftext.php
[imagejpeg]: http://php.net/manual/en/function.imagejpeg.php
[imagecolorallocate]: http://php.net/manual/en/function.imagecolorallocate.php
