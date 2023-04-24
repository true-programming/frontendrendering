# TYPO3 EXT frontendrendering

This extension provides basic typoscript configuration for rendering content or pages with fluid.

## Installation
Require this package via composer 
```
composer req trueprogramming/frontendrendering
```

## Usage

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

