# RWP Companion
Contributors: happyprime, jeremyfelt
Tags: R
Requires at least: 5.9
Tested up to: 5.9
Requires PHP: 7.2
Stable tag: 1.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A companion plugin for the [RWP package](https://github.com/happyprime/RWP/) used to publish to WordPress with R.

## Description

The [RWP package](https://github.com/happyprime/RWP/) allows R Markdown documents to be published to WordPress using the REST API.

The RWP Companion plugin provides an additional support layer so that documents published through R Markdown can be recognized in WordPress.

## Features

Note: This is still under active initial development and subject to change.

* Store `rwp_generated` meta on posts published through RWP.
* Store `rwp_tabset` meta on posts published through RWP that make use of R Markdown's tabset feature.
* Enqueue basic scripts and styles to support tabset when `rwp_tabset` meta is set.
* Add an `rwp-generated` class to `<body>` on single posts that were published through RWP.

## Changelog

### 1.0.0

Initial release.
