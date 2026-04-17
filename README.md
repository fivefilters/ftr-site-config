Full-Text RSS site config files
================

[Full-Text RSS](http://fivefilters.org/content-only/), our article extraction tool, makes use of site-specific extraction rules to improve results. Each time a URL is processed, it checks to see if there are extraction rules for the site being processed. If there are no rules are found, it tries to detect the content block automatically.

This repository contains the site-specific extraction rules we rely on in Full-Text RSS.

### Contributing changes

We run automated tests on these files to detect issues. If you'd like to help keep these up to date, please look at the [test results](http://siteconfig.fivefilters.org/test/) and see which files you'd like to contribute fixes for.

We chose GitHub for this set of files because they offer one feature which we hope will make contributing changes easier: [file editing](https://github.com/blog/844-forking-with-the-edit-button) through the web interface. 

You can now make changes to any of our site config files and request that your changes be pulled into the main set we maintain. When we receive a pull request we'll review the changes and if everything's okay we'll update our copy.

If a site is not in our set, you can create a file for it in the same way. See [Creating files on GitHub](https://github.blog/news-insights/the-library/creating-files-on-github/).

### How to write a site config file

The quickest and simplest way is to use our [point-and-click interface](http://siteconfig.fivefilters.org). It's a simple tool only intended to create a rule to extract the correct content block. 

For further refinements, e.g. selecting the title, stripping elements, dealing with multi-page articles, please see our [help page](https://help.fivefilters.org/full-text-rss/site-patterns.html).

### File naming

Use `example.com.txt` for

* www.example.com
* example.com

Use `.example.com.txt` for

* sport.example.com
* news.example.com
* environment.example.com
* etc.

Use `sport.example.com.txt` to target just that sub-domain:

* sport.example.com

Note: `.example.com.txt` will _not_ match `www.example.com` or `example.com`

### Instapaper

When we introduced site patterns, we chose to adopt the [same format](http://blog.instapaper.com/post/730281947) used by Instapaper. This allowed us to make use of the extraction rules contributed by Instapaper users. 

Marco, Instapaper's creator, graciously opened up the database of contributions to everyone:

> And, recognizing that your efforts could be useful to a wide range of other tools and services, I'll make the list of all of these site-specific configurations available to the public, free, with no strings attached.

~~You can see the list maintained by Instapaper at [instapaper.com/bodytext/](http://instapaper.com/bodytext/)~~ (no longer available since Instapaper was sold).

### Testing site config files

Currently you will have to have a copy of Full-Text RSS to test changes to the site config files. In the future we will try to make this process easier.
