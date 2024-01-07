Microsoft collections
===

# Translate

```php
/* @var  $ms \OP\UNIT\Microsoft */
$ms = OP()->Unit('Microsoft');

//  Translate. Source language is auto detect.
echo $ms->Translate()->Fetch(['<p>Hello new world</p>'], 'ja');

//  Translate language list.
D( $ms->Translate()->LanguageList() );
```
