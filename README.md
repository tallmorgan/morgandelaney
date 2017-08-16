# morgandelaney.me

This is a simple repo for browsing the code behind morgandelaney.me.

## Compiling SASS

```
# From either the `simple` or `full` directory
node-sass --output css --source-map true --source-map-contents sass/style.sass
```

> Note that `node-sass` calls can use `--watch` during development

## Deploying

```
# Set up SSH access and host
git add remote production ssh://morgan/var/repo/site.git

# Pushing to production will auto checkout and compile
git push production master
```

## Feature flags

Feature flags are very simply handled through query strings, e.g. `morgandelaney.me/?full`.

1. `full`: Show the full portfolio

1. `livereload`: Listen for livereload changes (dev)

1. `grid`: Show a grid on top of the page (dev)