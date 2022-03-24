
# 📃 App ReadMe Plugin

### 🚨 Requires OctoberCMS 2.0

## ✨ What does this plugin do?
Provides the ability for developers to add and maintain a ReadMe section within the admin area settings panel.
Developers can add "ReadMes", or documents, to the ReadMe section via the plugin settings as long as they have "manage readmes" access.
Each ReadMe supports a title, tags (separated by comma), and sections which each support a title and content section themselves. The section content supports raw HTML.
When a admin/user is viewing a ReadMe with more than one section, section titles are listed at the top of the ReadMe as an index and link to the full section below.

## ❓ Why would I use this plugin?
Clients often ask for information about or documentation on usage of their application. Why not add it directly to the application so it's just a click away, and make it easy for developers to update as the application is revised?
Useful in helping clients with larger teams easily train new members.
Useful for smaller teams or those who don't often login to their applications remind themselves of how to use it before contacting support.
Helpful in reminding developers how a client is using an application between development cycles.

## 🖥️ How do I install this plugin?
1. Clone this repository into `plugins/albrightlabs/appreadme`
2. Run the console command `php artisan october:migrate`
3. From the admin area, go to Settings > App ReadMe and click the "New ReadMe" button above the list to start creating your first ReadMe

## ⏫ How do I update this plugin?
Run either of the following commands:
* From the project root, run `php artisan october:util git pull`
* From the plugin root, run `git pull`

## 🚨 Are there any requirements for this plugin?
None, other than installation and the creation of ReadMe(s).

## 🔥 How to add a new ReadMe
* From the admin area, go to Settings > App ReadMe and the "New ReadMe" button above the list
* Enter a title for the Readme
* Enter tags for the ReadMe (separated by comma) to help with organization
* Click the "Add new section" button
  * Enter a title for the section, if needed
  * Enter content for the section as needed
* Save the ReadMe
***Note: Managing ReadMes requires an admin to have "manage readmes" access***

## 🔥 How to edit an existing ReadMe
* From the admin area, go to Settings > App ReadMe and select a ReadMe from the list
* Click the edit button at the bottom and make the needed revisions
* Save the ReadMe
***Note: Managing ReadMes requires an admin to have "manage readmes" access***

## 🔥 How to delete an existing ReadMe
* From the admin area, go to Settings > App ReadMe and select a ReadMe from the list
* Click the delete button at the bottom and confirm deletion of the ReadMe
***Note: Managing ReadMes requires an admin to have "manage readmes" access***

## ⚙️ Explanation of settings
* There are no settings for this plugin

## ✨ Future plans
* Add sub-sections to ReadMe sections to provided indented sections within parent sections
* Feel free to make requests by emailing them to [support@albrightlabs.com](support@albrightlabs.com)
