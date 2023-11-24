# TYPO3 EXT frontendrendering
    Author: Michael Semle
    E-Mail: git@mikeproduction.de
    repo:   https://github.com/true-programming/frontendrendering

This extension provides basic typoscript configuration for rendering content or pages with fluid.

## Features
* Improved lib.contentElement object
* Lib to render content of a specific colPos
* Lib to render content of defined pages and colPos

## Usage

### Include files
To use the configurations, just import them separately from the [configuration](Configuration/TypoScript/Lib) folder or import the [setup.typoscript](Configuration/TypoScript/setup.typoscript) file.

```
@import 'EXT:frontendrendering/Configuration/TypoScript/Lib/lib.contentElement.typoscript'
@import 'EXT:frontendrendering/Configuration/TypoScript/Lib/lib.fluidPage.typoscript'
@import 'EXT:frontendrendering/Configuration/TypoScript/Lib/lib.renderContent.typoscript'
@import 'EXT:frontendrendering/Configuration/TypoScript/Lib/lib.renderContentFromPid.typoscript'
```
OR
```
@import 'EXT:frontendrendering/Configuration/TypoScript/setup.typoscript'
```

### Usage for PAGE object
The lib sets the template name depending on the backend layout without the prefixed `pagets__`. To activate a custom config this could look like this:
```
page = PAGE
page {
    10 = CASE
    10 {
        key.data = pagelayout
        default =< lib.fluidPage
        pagets__newspage =< lib.fluidPage--news
    }
}
```

### Usage for content elements
The `lib.contentElement` is referenced to the `tt_content.default` already in core, so we only change some more stuff. The template name gets set to the value of the CType field. \
The lib `lib.renderContent` provides a cObject to render content of a specific colPos with a slide option upwards the page tree.
```
<f:cObject data="{colPos: 1}" typoscriptObjectPath="lib.renderContent"/>
<f:cObject data="{colPos: 1, slide: 1}" typoscriptObjectPath="lib.renderContent"/>
```
To render content from a specific page and colPos the `lib.renderContentFromPid` is the perfect fit.
```
<f:cObject data="{pidInList: 1, colPos: 1}" typoscriptObjectPath="lib.renderContentFromPid"/>
<f:cObject data="{pidInList: '1,2,3', colPos: 1, slide: 1}" typoscriptObjectPath="lib.renderContentFromPid"/>
```

## How to install this extension?

You can set this up via composer (`composer req trueprogramming/frontendrendering`).

## Requirements

* TYPO3 v11 or v12.

## License

The extension is licensed under GPL v2+, same as the TYPO3 Core.

For details see the LICENSE file in this repository.
