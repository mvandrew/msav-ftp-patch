# MSAV FTP Patch - WordPress Plugin
Plugin to update WordPress Automatically Without Using FTP.

In some cases, you are not able to update your WordPress core files and update/install plugins to a newer version without providing your FTP connection information.

This is a common issue whereby the WordPress system can’t write to CMS folders directly.

## How to solve this issue?

### Manually define the FTP details
To solve this issue you need to define the FTP details in your wp-config.php.

### Using this plugin to provide direct access to CMS folders
This plugin safely defining constant FS_METHOD.

This bypasses WordPress’s recurring prompts, and allows auto-updates of your files to happen.