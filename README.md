Bolt Table of Contents
======================

Adds the ability to dynamically generate a Table of Contents (TOC) from *H1*...*H6* tags in your content.

Overview
--------

This extension is an integration of the [PHP TOC](http://github.com/caseyamcl/toc) library for the
[Bolt CMS](http://bolt.cm).

It adds several Twig functions and filters allowing you to generate Table of Contents in your themes.

Adding Anchors to Content
-------------------------

By default, this library will generate a Table of Contents only from header tags that
include `id` attributes.  You can dynamically add these attributes to any header tags that do not
already have them by using the `add_anchors` Twig filter (or function).

```twig
{# Use add_anchors filter to add id attributes to headers: H2, H3, H4 #}
{% block record_body %}
    {{ record.body | add_anchors(2, 3) }}
{% endblock %}

{# Alternatively, you can use add_anchors as a Twig function if you need to #}
{% block record_body %}
    {{ add_anchors(record.body, 2, 3) }}
{% endblock %}
```

Rendering a Table of Contents
-----------------------------

Use the `toc()` Twig function on any content to generate an HTML Table of Contents.

Create a Table of Contents for a block of content for H2, H3, H4:

```twig

<div class='meta'>
 {{ toc(block('record_body'), 2, 3) }}
</div>

<article>
{% block record_body %}
    {{ record.body | add_anchors(2, 3) }}
{% endblock %}
</article>

```

Create a Table of Contents for record contents, dynamically adding anchors for
H2, H3, H4, H5.

```twig

<div class='meta'>
 {{ toc(add_anchors(record.body, 2, 4), 2, 4) }}
</div>

```

Further Reading
---------------

Refer to the [TOC Library Documentation](http://github.com/caseyamcl/toc)
for more usage information.
