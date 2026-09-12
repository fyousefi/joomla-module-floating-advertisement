# Changelog

All notable changes to this project are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.0.0] - 2026-09-12

### Added
- Dual compatibility for Joomla 3.10 and Joomla 4 / 5.
- Persian (fa-IR) administrator language files.
- Desktop device option alongside phone and tablet.
- Helper for media-field paths and Bootstrap 3 + 5 visibility classes.
- Update server declaration and SHA-256 checksum support.
- `CHANGELOG.md` shipped inside the install package.

### Changed
- Author, copyright, and license metadata aligned with AsiaSun.ir / GNU GPL.
- Layout is loaded from `mod_floating_advertising` instead of the incorrect `mod_floating_ad` element.
- Close control is a button and removes the banner node safely.
- Banner image still renders when a link is not set.

### Fixed
- Broken language tags in the manifest (`</language>` missing).
- Radio option typo `vlaue` that prevented "No" from being saved correctly.
- Unclosed `backgroundimage` field in the module XML.
- Extra parenthesis in `htmlspecialchars()` that could cause a PHP parse error.
- `JModuleHelper::getLayoutPath()` pointed at the wrong module name, so the template never loaded.
- `Element.remove()` called with an invalid argument.
- `foreach` on a non-array `device_type` value.
- Joomla 4 media field values that append `#joomlaImage://…` metadata.

## [1.0.0] - 2020-04

### Notes
- Initial Joomla 3 release.
