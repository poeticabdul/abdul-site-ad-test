# Abdul Site

A simple WordPress site structured for [WordPress VIP](https://docs.wpvip.com/wordpress-skeleton/).

## Structure

```
themes/abdul-site/     # Lightweight block theme (theme.json + HTML templates)
client-mu-plugins/     # Always-on plugins (auto-activates the theme)
plugins/               # Regular plugins
vip-config/            # vip-config.php, loaded before WordPress
images/ languages/ private/
```

WordPress core and VIP's own `mu-plugins` are provided by the platform and are not tracked.

## Local development

Requires [VIP CLI](https://docs.wpvip.com/vip-cli/) and Docker.

```bash
vip dev-env create --slug=abdul-site --app-code=. --title="Abdul Site"
vip dev-env start --slug=abdul-site
```

Then open the URL printed by `vip dev-env info --slug=abdul-site`. The `abdul-site` theme is activated automatically.
