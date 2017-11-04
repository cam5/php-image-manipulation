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

We might try something like the following, to start:

{% highlight php %}
{% include_relative snippets/watermarking_1.php %}
{% endhighlight %}

![A Leaf, with markup data.](./assets/images/modified/leaf_1.jpg)

[flickr-search]: https://www.flickr.com/search/?styles=depthoffield&media=photos&orientation=landscape&license=2%2C3%2C4%2C5%2C6%2C9&text=ontario&advanced=1
