
# 📃 App ReadMe Plugin

### 🚨 Requires OctoberCMS 2.0

## ✨ What does this plugin do?
Provides the ability for developers to add and maintain a ReadMe section within the admin area settings panel.
Developers can add documents to the "About & Documentation" section of the admin are settings panel as long as they have "manage readmes" access.
Each document supports a title, tags (separated by comma), and sections. Each section supports a title and content section themselves. Each section supports one layer of sub-sections, which also supports a title and content section for each. All content sections support raw HTML.
When a admin/user is viewing a ReadMe with more than one section, section titles are listed at the top of the ReadMe as an index and link to the full section below.

## ❓ Why would I use this plugin?
Clients often ask for information about or documentation on usage of their application. Why not add it directly to the application to decrease their need to reach out to a developer or support staff? While we're at it, why not make it easy for developers to update the documentation as the application is revised?
Useful in helping clients with larger teams easily train and onboard new members.
Useful for smaller teams or those who don't often login to their applications remind themselves of how to use it.
Helpful in reminding developers how a client is using an application between development cycles.

## 🖥️ How do I install this plugin?
1. Clone this repository into `plugins/albrightlabs/appreadme`
2. Run the console command `php artisan october:migrate`
3. From the admin area, go to Settings > About & Documentation and click the "New Document" button above the list to start creating your first document

## ⏫ How do I update this plugin?
Run either of the following commands:
* From the project root, run `php artisan october:util git pull`
* From the plugin root, run `git pull`

## 🚨 Are there any requirements for this plugin?
None, other than installation and the creation of documents.

## 🔥 How to add a new ReadMe
* From the admin area, go to Settings > About & Documentation and the "New Document" button above the list
* Enter a title for the document
* Enter tags for the document (separated by comma) to help with organization
* Click the "Add new section" button
  * Enter a title for the section, if needed
  * Enter content for the section as needed
  * Click the "Add new subsection" button, if needed
* Save the document
***Note: Managing Documents requires an admin to have "manage readmes" access***

## 🔥 How to edit an existing ReadMe
* From the admin area, go to Settings > About & Documentation and select a document from the list
* Click the edit button at the bottom and make the needed revisions
* Save the document
***Note: Managing Documents requires an admin to have "manage readmes" access***

## 🔥 How to delete an existing ReadMe
* From the admin area, go to Settings > About & Documentation and select a document from the list
* Click the delete button at the bottom and confirm deletion of the document
***Note: Managing Documents requires an admin to have "manage readmes" access***

## ⚙️ Explanation of settings
* There are no settings for this plugin

## ✨ Future plans
* ~~Add sub-sections to document sections to provided indented sections within parent sections~~
* Feel free to make requests by emailing them to [support@albrightlabs.com](support@albrightlabs.com)
