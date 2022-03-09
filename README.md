# RWP Companion

A companion plugin for the RWP package used to publish to WordPress with R.

## Description

The [RWP](https://github.com/happyprime/RWP/) package allows R Markdown documents to be published to WordPress using the REST API.

The RWP Companion plugin provides an additional support layer so that documents published through R Markdown can be recognized in WordPress.

## Features

Note: This is still under active initial development and subject to change.

* Store `rwp_generated` meta on posts published through RWP.
* Store `rwp_tabset` meta on posts published through RWP that make use of R Markdown's tabset feature.
* Enqueue basic scripts and styles to support tabset when `rwp_tabset` meta is set.
* Add an `rwp-generated` class to `<body>` on single posts that were published through RWP.
