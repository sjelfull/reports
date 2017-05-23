# Reports plugin for Craft CMS

Write reports with Twig.

![Screenshot](resources/icon.png)

## Installation

To install Reports, follow these steps:

1. Download & unzip the file and place the `reports` directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins
3. The plugin folder should be named `reports` for Craft to see it.

Reports works on Craft 2.4.x and higher;

## Reports Overview

Example report in Twig:

```twig
{% set newsCount = craft.entries.section('news').limit(null).total() %}
{{ craft.reports.prepare({
    columns: [ 'Total news entries' ], 
    rows: [ [ newsCount ] ]
}) }}
```

## Reports Roadmap

* Add charts?

Brought to you by [Superbig](https://superbig.co)
