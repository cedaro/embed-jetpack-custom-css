# Embed Jetpack Custom CSS

Embed Jetpack Custom CSS in the document head to improve performance.

__Contributors:__ [Brady Vercher](https://twitter.com/bradyvercher)  
__Requires:__ 4.0  
__Tested up to:__ 4.1  
__License:__ [GPL-2.0+](http://www.gnu.org/licenses/gpl-2.0.html)

_Requires [Jetpack](http://wordpress.org/plugins/jetpack/)._

_Embed Jetpack Custom CSS_ moves CSS added using Jetpack's [Custom CSS](http://jetpack.me/support/custom-css/) module to an inline `<style>` tag in the document head instead of using the default `<link>` reference.

This eliminates an extra HTTP request and prevents WordPress from being loaded twice for new visitors to improve front end performance.

Works best with short snippets of CSS.

There aren't any settings -- just install, activate, and you're good to go.

## Installation ##

### Upload ###

1. Download the [latest release](https://github.com/cedaro/embed-jetpack-custom-css/archive/master.zip) from GitHub.
2. Go to the _Plugins &rarr; Add New_ screen in your WordPress admin panel and click the __Upload__ button at the top next to the "Add Plugins" title.
3. Upload the zipped archive.
4. Click the __Activate Plugin__ link after installation completes.

### Manual ###

1. Download the [latest release](https://github.com/cedaro/embed-jetpack-custom-css/archive/master.zip) from GitHub.
2. Unzip the archive.
3. Copy the folder to `/wp-content/plugins/`.
4. Go to the _Plugins &rarr; Installed Plugins_ screen in your WordPress admin panel and click the __Activate__ link under the _Embed Jetpack Custom CSS_ item.

Read the Codex for more information about [installing plugins manually](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

### Git ###

Clone this repository in `/wp-content/plugins/`:

`git clone git@github.com:cedaro/embed-jetpack-custom-css.git`

Then go to the _Plugins &rarr; Installed Plugins_ screen in your WordPress admin panel and click the __Activate__ link under the _Embed Jetpack Custom CSS_ item.
