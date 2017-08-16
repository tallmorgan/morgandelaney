# morgandelaney.me

This is a simply repo for browsing the code behind morgandelaney.me built in WordPress.

## Routing to full/simple pages

To form a whitelist to dis/allow routes to the full/simple pages, include the following
line at the top of index.php:

```
if (!isset($_GET['full'])) die(include('index-simple.php'));
```

## Compiling SASS

**Simple**: `(cd simple && node-sass --output css --source-map true --source-map-contents sass/style.sass)`

> Note that `node-sass` calls can use `--watch` during development