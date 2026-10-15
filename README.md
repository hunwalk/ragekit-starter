# My RageKit app

A desktop app written in PHP with [RageKit](https://github.com/hunwalk/ragekit): the PHP is
compiled to native code by TypePHP, and the UI is drawn by Slint (no browser engine).

## Requirements

PHP 8.4+, Composer, git, tar and a C++ compiler. On Debian or Ubuntu:

```sh
sudo apt install php8.4-cli composer git build-essential \
    libfontconfig1 libfreetype6 libxkbcommon0 libinput10 libgbm1 libudev1
```

Windows: Visual Studio 2022 Build Tools ("Desktop development with C++") and 7-Zip. macOS isn't
supported yet.

## Run it

```sh
composer start      # build, then start the app (vendor/bin/ragekit run)
composer dev        # hot reload: edit a template or PHP file and the window updates
composer build      # compile only, into build/slint/
```

The first build checks the toolchain. If `ragekit setup` didn't run when the app was created (or
RageKit was updated since), run it, and `ragekit doctor` to see what's missing:

```sh
vendor/bin/ragekit setup
vendor/bin/ragekit doctor
```

## What's where

| Path | What it is |
|---|---|
| `main.php` | `main()`: opens the first window |
| `src/HomeScreen.php` | the screen's state (public properties) and event handlers (public methods) |
| `templates/HomeScreen.rk` | what the window looks like |
| `project.yml` | build settings: kit (`shadcn` or `material`), renderer, modules, `nano: true` |

Next steps: RageKit's guides on [getting started](https://github.com/hunwalk/ragekit/blob/master/docs/getting-started.md),
[templates](https://github.com/hunwalk/ragekit/blob/master/docs/templates.md),
[kits](https://github.com/hunwalk/ragekit/blob/master/docs/kits.md) and
[dev mode](https://github.com/hunwalk/ragekit/blob/master/docs/dev-mode.md).

## License

The files of this starter are free to use without conditions (MIT-0). What you may do with the
app you build depends on what goes into it: RageKit, PHP's runtime and Slint. Read RageKit's
[licensing notes](https://github.com/hunwalk/ragekit/blob/master/THIRD_PARTY_NOTICES.md) before
you distribute it.
