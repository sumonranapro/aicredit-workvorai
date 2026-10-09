# Workvorai PHP Site

Converted from the supplied Workvorai static HTML pages without changing the page content.

## Structure

- `includes/header.php` - shared HTML head, metadata, assets, preloader, and navigation
- `includes/footer.php` - shared footer, mobile menu, back-to-top markup, and common JavaScript
- `index.php`
- `about.php`
- `services.php`
- `pricing.php`
- `faq.php`
- `contact.php`
- `privacy.php`

Each page only defines its page metadata (`$page_title`, `$page_description`, `$current_page`) and includes the shared header/footer. Contact and Privacy retain their original page-specific CSS/JavaScript through the same reusable include mechanism.

## Assets

Copy the original Workvorai `assets/` directory beside these PHP files.

Expected structure:

```text
assets/
  css/
  font/
  icons/
  images/
  js/
```

The supplied HTML files reference these existing assets, but the asset directory was not part of the uploaded files.
