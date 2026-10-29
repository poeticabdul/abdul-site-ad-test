# Abdul Site

A simple WordPress site. Only the custom code (`wp-content/`) is tracked; WordPress core is pulled in by Docker.

## Structure

```
wp-content/
  themes/abdul-site/     # Lightweight block theme (theme.json + HTML templates)
  mu-plugins/            # Auto-activates the theme
docker-compose.yml       # Local WordPress + MariaDB
```

## Run locally

```bash
docker compose up -d
```

Open http://localhost:8080 and complete the WordPress installer. The `abdul-site` theme is activated automatically.

Stop with `docker compose down` (add `-v` to wipe the database).
