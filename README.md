# Pallet Theme for Flarum

[![MIT license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/the-turk/flarum-pallet-theme/blob/master/LICENSE) [![Latest Stable Version](https://img.shields.io/packagist/v/the-turk/flarum-pallet-theme.svg)](https://packagist.org/packages/the-turk/flarum-pallet-theme) [![Total Downloads](https://img.shields.io/packagist/dt/the-turk/flarum-pallet-theme.svg)](https://packagist.org/packages/the-turk/flarum-pallet-theme)

![Light Pallet](https://i.imgur.com/EBPARGE.png)

What's up! I've been stalking the discuss since when they gave me 3 months vacation from where I work. This theme was one of my unreleased works (which still feels like far from finished) before I got that job and took me couple of hours to update it for the stable release.

_There are some breakthrough changes for the Tags extension with this and I'm still unfamiliar with the stable Flarum release so let's stick with the Dev tag for a while._

Introducing experimental tags navigation...

![Dark Pallet - Tags Navigation](https://i.imgur.com/XE0xdu6.gif)

When you head into a tag's discussion list, only that tag's children and secondary tags will be shown in the **affixed** sidebar. Main purpose of this idea is to create a tag-focused user experience.

It can be used with dark & light modes but sadly, it doesn't work with the [Night Mode by FriendsOfFlarum](https://discuss.flarum.org/d/21492-friendsofflarum-night-mode) at the moment.

_This extension is under **minimal maintenance** (or maybe no maintenance at all ??)._

## Installation

```bash
composer require "the-turk/flarum-pallet-theme:0.1.0-beta.4"
```

## Recommendations

It's best to use this theme with the following extensions:

1. [Synopsis](https://discuss.flarum.org/d/25772-synopsis) by [IanM](https://discuss.flarum.org/u/ianm)

```bash
composer require ianm/synopsis
```

## Known Issues

When you start browsing from the "Tags" page, tag listing will mixed up which I believe due to a bug in [flarum/tags](https://github.com/flarum/tags/pull/134#issuecomment-861665957) -- haven't taken a deeper look into this.

## Links

- [Source code on GitHub](https://github.com/the-turk/flarum-pallet-theme)
- [Changelog](https://github.com/the-turk/flarum-pallet-theme/blob/master/CHANGELOG.md)
- [Report an issue](https://github.com/the-turk/flarum-pallet-theme/issues)
- [Download via Packagist](https://packagist.org/packages/the-turk/flarum-pallet-theme)
