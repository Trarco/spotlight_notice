# Spotlight Notice Block

A lightweight and customizable Moodle block for displaying announcements or highlighted messages with a colored background.

## Features

* Title
* Fully configurable message using the WYSIWYG editor (Atto/TinyMCE)
* Background color selection with help on CSS color formats
* Mustache template to separate logic and presentation
* Accessibility-friendly structure using `<div>` with `aria-labelledby`
* Simple and intuitive configuration

## Requirements

* Moodle 3.9 or higher
* PHP 7.2 or higher

## Installation

1. Copy the `block_spotlight_notice` folder into `yourmoodle/blocks/`.
2. Log in to Moodle as an administrator.
3. Go to **Site administration > Notifications** to complete the installation.
4. Add the block to any page using **Add a block > Spotlight Notice**.

## Configuration

1. On the page where the block is added, click the configuration gear icon.
2. Fill in the following fields:
   * **Notice title** – text shown as the header
   * **Message** – HTML content using the built-in editor (bold, italic, links)
   * **Background color** – CSS value such as `#bbcdea`, `red`, or `rgb(51,153,221)`
3. Save and preview the block with the desired style.

## Contributions

Feel free to open a pull request or submit an issue on the repository.

## License

MIT License © Marco Traina