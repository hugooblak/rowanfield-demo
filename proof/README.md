# Test proof — Rowanfield

Run on 2026-09-18 against a fresh WordPress install with the demo content. Local test server, no compression.

| Check | Result | Details |
|---|---|---|
| 1. Markup lint | ✅ Pass | clean |
| 2. Pages load | ✅ Pass | 9 pages |
| 3. Link crawl | ✅ Pass | 41 URLs checked |
| 4. Editor: no invalid blocks | ✅ Pass | 9 posts/pages, 28 patterns, all templates |
| 5. Editor font sizes = live site | ✅ Pass | 25 text elements compared |
| 6. Accessibility (axe, WCAG 2.2 AA) | ✅ Pass | 9 pages × 2 widths, 0 violations |
| 7. Keyboard | ✅ Pass | skip link, focus outline, FAQ, mobile menu |
| 8. Forms | ✅ Pass | 6 forms: every field labelled (CF7: errors shown) |
| 9. Layout 320–1440px | ✅ Pass | no overflow, header fits |
| 10. Lighthouse (mobile) | ✅ Pass | / 98/100/100/100  /orchard-pollination/ 98/100/100/100  /hive-management/ 98/100/100/100  /field-reports/ 98/100/100/100  /inquiry/ 100/100/100/100  /about/ 100/100/100/100 |
| 11. Screenshots | ✅ Pass | 24 saved to proof/screenshots |

## Lighthouse (mobile)

| Page | Speed | Accessibility | Best practices | SEO | LCP | CLS |
|---|---|---|---|---|---|---|
| / | 98 | 100 | 100 | 100 | 2.3 s | 0 |
| /orchard-pollination/ | 98 | 100 | 100 | 100 | 2.3 s | 0 |
| /hive-management/ | 98 | 100 | 100 | 100 | 2.3 s | 0 |
| /field-reports/ | 98 | 100 | 100 | 100 | 2.3 s | 0 |
| /inquiry/ | 100 | 100 | 100 | 100 | 1.4 s | 0 |
| /about/ | 100 | 100 | 100 | 100 | 1.8 s | 0 |

Automated tests cannot catch every accessibility or design problem. A real project adds manual screen reader testing.
