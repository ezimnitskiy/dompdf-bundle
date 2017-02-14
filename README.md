What is DompdfBundle?
=============================

This bundle provides a wrapper for using [dompdf] inside symfony.

### Installation

```
php composer.phar require es/dompdf-bundle
```

### Enabling the bundle

```php
    // app/AppKernel.php

    public function registerBundles()
    {
        return array(
            // ...

            new ES\DompdfBundle\ESDompdfBundle(),

            // ...
        );
    }
```

### Usage

Whenever you need to turn a html page into a pdf just use this anywhere in your controller:

```php
// Set some html and get the service
$html = '<h1>Sample Title</h1><p>Lorem Ipsum</p>';
$dompdf = $this->get('dompdf');

// Stream the pdf to the browser
$dompdf->streamHtml($html, "document.pdf");

// Get binary content of the pdf document
$dompdf->getPdf($html);
```

### Configuration

You can configure each dompdf option under the ``config`` key.

```yaml
es_dompdf:
    defaults:
        dpi: 150
        defaultPaperSize: A4
        ...
```

This bundle is available under the [MIT license](LICENSE.md).

[dompdf]: https://github.com/dompdf/dompdf
