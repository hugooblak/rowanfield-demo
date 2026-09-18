# Rowanfield: a services site built in native WordPress blocks

A website for **Rowanfield**, a made-up commercial pollination business. It was built as a portfolio piece to show how I approach a homepage redesign and a set of service pages in WordPress: clear visual hierarchy, a short multi-step inquiry form that records where every inquiry came from, and pages the client can edit themselves.

> Rowanfield is a fictional company. The copy, prices, reviews and figures are invented and labeled as samples on the site.

**Try it in your browser (no install):** [Open in WordPress Playground](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/hugooblak/rowanfield-demo/main/blueprint.json)

Playground runs a real WordPress site in your browser tab. The first load takes a little while. You are logged in as an admin, so you can submit the form and then open **Inquiries** in the admin. Nothing you do there is saved.

**Tip:** click *"Show the design notes behind each section"* in the top bar. A short note appears above every section explaining why it is there.

---

## What the job asked for, and where to find it

| Ask | In this demo |
|---|---|
| Redesign the homepage | `/` — hero with the offer and the first form step, trust strip, how it works, services, price guide, reviews, comparison, guarantee, FAQ, closing call to action |
| Create 3 new service pages | `/orchard-pollination/`, `/hive-management/`, `/field-reports/` — each with its own hero and detail section, sharing the sections below |
| Light updates to existing pages | `/about/`, `/faq/`, `/privacy-policy/` rebuilt in the same system |
| Improve visual presentation and UX | One type scale, one color palette, every pairing at 4.5:1 contrast or better. Mobile checked at 390px. Hand-drawn SVG icons, none over 500 bytes |
| Efficient and on schedule | Every section is a reusable block pattern, so a new page is assembled rather than designed from scratch |

## How it is built

- **Native block theme.** No page builder, no Custom HTML blocks. Everything in the editor is a normal WordPress block, so the client can change any word without calling a developer.
- **`theme.json` does the design work.** Colors, type scale, spacing and button styles are defined once. Change a color there and it changes everywhere, including inside the editor.
- **24 block patterns.** Every section on every page is a pattern. Building a fourth service page means stacking existing patterns and rewriting the words.
- **Two small plugins.** One runs the inquiry form and its inbox. One adds the design notes you can toggle on the live demo.

## The inquiry form

- Four steps, one question per step, easiest question first.
- Works with JavaScript switched off, as a plain form post.
- Every submission records UTM tags, Google and Facebook click IDs, the landing page and the referrer, so the client can see which advertising produced which inquiry.
- Submissions land in an **Inquiries** inbox in wp-admin with a status field and a CSV export.
- The consent sentence is stored with each inquiry, as a record of what the person agreed to.
- Privacy export and erase are wired into WordPress's own tools.

## Accessibility

- Visible 3px focus outline on everything focusable.
- One `h1` per page, headings in order.
- Every form field has a real label, and errors are announced.
- Color contrast checked at 4.5:1 or better on all fourteen pairings the site uses.

## Running it locally

```bash
tools/wp-local.sh rowanfield 8081
node tools/test-all.mjs rowanfield 8081
```

## What this demo does not do

- It is not the client's site and does not use their content, branding or photographs.
- Reviews, prices, frame counts and registration numbers are invented and labeled as samples.
- Hosting, DNS, and moving an existing site's content are outside what a demo can show.
