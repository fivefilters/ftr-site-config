Full-Text RSS site config files
================

[Full-Text RSS](http://fivefilters.org/content-only/), our article extraction tool, makes use of site-specific extraction rules to improve results. Each time a URL is processed, it checks to see if there are extraction rules for the site being processed. If there are no site patterns, it tries to detect the content block automatically.

This repository contains the site config files we use in Full-Text RSS.

### Contributing changes

We chose GitHub for this set of files because they offer one feature which we hope will make contributing changes easier: [file editing](https://github.com/blog/844-forking-with-the-edit-button) through the web interface. 

You can now make changes to any of our site config files and request that your changes be pulled into the main set we maintain. This is what GitHub calls the Fork and Pull model:

> The Fork & Pull Model lets anyone fork an existing repository and push changes to their personal fork without requiring access be granted to the source repository. The changes must then be pulled into the source repository by the project maintainer. This model reduces the amount of friction for new contributors and is popular with open source projects because it allows people to work independently without upfront coordination.

When we receive a pull request we'll review the changes and if everything's okay we'll update our copy.

If a site is not in our set, you can create a file for it in the same way. See [Creating files on GitHub](https://github.com/blog/1327-creating-files-on-github).

### How to write a site config file

Please see our [help page](http://help.fivefilters.org/customer/portal/articles/223153-site-patterns) for a brief guide. We hope to have some tutorials up soon.

### Instapaper

When we introduced site patterns, we chose to adopt the [same format](http://blog.instapaper.com/post/730281947) used by Instapaper. This allows us to make use of the existing extraction rules contributed by Instapaper users. 

Marco, Instapaper's creator, graciously opened up the database of contributions to everyone:

> And, recognizing that your efforts could be useful to a wide range of other tools and services, I'll make the list of all of these site-specific configurations available to the public, free, with no strings attached.

Most of the extraction rules in our set are borrowed from Instapaper. You can see the list maintained by Instapaper at [instapaper.com/bodytext/](http://instapaper.com/bodytext/) (login required).

### Testing site config files

Currently you will have to have a copy of Full-Text RSS to test changes to the site config files. In the future we will try to make this process easier.
