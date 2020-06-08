# mediaconsent
TYPO3 Extension

[View documentation in detail](https://docs-mediaconsent.ekvw.net)

This extension loads HTML content only after the user has clicked on a short note expressing his/her agreement to see it.

It is useful for embedding HTML snippets (often called widgets) from social media content providers like Facebook, Twitter and others. If the user does not agree, no widget is shown and no personal data (IP number etc.) is transferred to the social media provider.

The extension provides a new content element called "Media Consent Opt-In" which has two specific fields: one for the HTML snippet embedding the content, another for selecting the content provider (Facebook, Twitter...)

## Routing

To make the extension work with TYPO3's new routing, you should add a page type suffix for the reload page type, similar to this example:

```
routeEnhancers:
  PageTypeSuffix:
    map:
      mediaconsent.html: 122
```
