# TechConnect 2026 + ResCon 2026 — Laravel clone

A pixel-faithful Laravel rebuild of two sibling Hugo sites (both on the
`hugo-brewm` theme):

| Site | Original | Here |
|---|---|---|
| TechConnect 2026 | <https://rnd.iitb.ac.in/techconnect/en/> | `/` |
| ResCon 2026 | <https://rnd.iitb.ac.in/rescon/en/> | `/rescon` |

Visible text on every mirrored page is byte-identical to the live original
(21 pages compared, 21 identical). TechConnect's "ResCon" nav link now points at
the local `/rescon` clone instead of off-site.

## Run it

```bash
composer install
cp .env.example .env     # if .env is missing
php artisan key:generate
php artisan serve
```

Then open <http://127.0.0.1:8000>.

No database is required — sessions, cache and queue all use file/sync drivers.

## Layout

```
routes/web.php                  26 page routes + per-page metadata (title, description,
                                keywords, canonical, skip-link target)
resources/views/
  layouts/app.blade.php         <head>, Bootstrap 5.0.2 + bootstrap-icons + jQuery, theme CSS/JS
  partials/header.blade.php     masthead, logos, main menu, search
  partials/footer.blade.php     accessibility panel, focus mode, backgrounds
  pages/*.blade.php             one view per page, holding that page's <main>
  rescon/layout.blade.php       ResCon's own <head> + chrome
  rescon/partials/*.blade.php   ResCon masthead and footer
  rescon/pages/*.blade.php      one view per ResCon page
public/
  css/hugo-brewm.min.css        theme stylesheet (font URLs rewritten to local)
  css/fonts/                    16 webfonts (Crimson, Inter, Inconsolata, OpenDyslexic, base-ui)
  js/hugo-brewm.min.js          theme behaviour
  media/                        41 images mirrored from the original
  pagefind/                     TechConnect search index, rebuilt from these pages
  rescon-assets/                ResCon's theme CSS/JS, 35 images and its own search
                                index (kept outside the /rescon/* route namespace so
                                the directory never shadows the /rescon index route)
```

## Routes

**TechConnect (26)** — `/` · `/event` ·
`/event/{about,exhibition,symposium,contact,team,gallery,highlights}` ·
`/form/attendee-registration` · `/tags` · `/tags/{14 topic pages}`

**ResCon (18)** — `/rescon` · `/rescon/detail` ·
`/rescon/detail/{programme,speakers,dates,gallery,highlights,contact}` ·
`/rescon/tags` · `/rescon/tags/{9 topic pages}`

Regenerate the route table and views with the scripts noted below; the ResCon
generator rewrites its own block in `routes/web.php`, so run it after the
TechConnect one.

## Notes

- **Absolute self-URLs.** The theme prints the page's own URL in the colophon, the QR block
  and the social-share links. Those resolve through `$base` (`rtrim(url('/'), '/')`), so they
  follow `APP_URL` instead of pointing back at the original site.
- **Search.** The Pagefind index under `public/pagefind/` was generated from these pages with
  Pagefind 1.4.0 (the same version the original uses) and indexes the same 8 content pages.
  Regenerate after editing page copy:
  ```bash
  # snapshot the rendered routes to a folder of .html files, then:
  npx pagefind@1.4.0 --site <snapshot-dir> --output-path public/pagefind
  ```
  ResCon has a second index under `public/rescon-assets/pagefind/`. Because that
  bundle sits outside `/rescon/`, Pagefind would otherwise derive result URLs of
  `/rescon-assets/...`, so its `PagefindUI` call passes `baseUrl: "/rescon"`.
- **Blade and `@`.** Page views are raw HTML and are *not* wrapped in `@verbatim`, so the
  `{{ $base }}` substitution works. The mirrored content contains no `{{` and no `@token`
  that collides with a Blade directive (checked against the compiler's directive list).
  Escaping `@` was deliberately avoided because it would corrupt `@media` inside the theme's
  inline `<style>` blocks. If you paste in new content, re-check those two things.
- **Copy-permalink icon.** `#copyPermalink` ships with `class=hide`; the theme's JS only
  reveals it when `location.protocol === 'https:'`. Over plain HTTP it stays hidden here
  exactly as it would on the original.
- **Carried over from the original, unchanged:**
  - The SINE partner logo points at `sineiitb.org`, which is currently unreachable, so it
    renders broken — as it does on the live site.
  - Six `<img class="card-img-top img-div" src alt loading=lazy>` placeholders on the homepage
    have an empty `src` in the original markup and are reproduced verbatim.
  - The 2025 event compendium (~55 MB) is still linked from the origin server rather than
    mirrored.
