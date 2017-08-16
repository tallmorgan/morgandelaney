# morgandelaney.me

This is a simple repo for browsing the code behind morgandelaney.me.

## Compiling SASS

```
# From either the `simple` or `full` directory
node-sass --output css --source-map true --source-map-contents sass/style.sass
```

> Note that `node-sass` calls can use `--watch` during development