# x-t.github.io

My site.

## Working directories

`src/` - Main source of the site

`blog/` - Everything blog-related

`resources/` - Site's resources

## Compiling

```
$ ./compile.sh
```

`compile.awk` - Awk script for the compiler

## Testing the compiler

Check the output by adding the `--debug` flag (defaults to `$prefix/index.html`)

```
$ ./compile.sh --debug
```

To test specific page, use `--debug %FILE%`

```
$ ./compile --debug blog/src_2018.html
```


