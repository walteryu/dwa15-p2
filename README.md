# HES, DWA-15 P2 - XKCD Password Generator

## Live URL
<http://p2.walteryu.pw>

## Description
Password generator that accepts user input and returns word-based password, inspired by
[XKCD Webcomic](http://xkcd.com/936/).

User is asked to enter number of words per password, between 0 and 9. Additional options are available to add number or character to last word.

Words may also be shuffled after they are selected for additional security.

HTML form elements are used to capture user input via POST function into logic.php file. "Number of words" is evaluated as integer using a number entry field and additional options as checkboxes form fields.

Random words are selected from the wordlist.php file, random number between 0-9 is generated and character are randomly (if either/both selected).

Finally, array operations are used to append the number/characters to the last word and/or shuffle order of words (additional options).

## Demo
YouTube video is submitting using personal project account (StormSavvy), which contains my other coding demos:

[Demo on YouTube](https://youtu.be/Clgxj92zntk)

## Details for Teaching Team

Lecture 3 video was referenced for general approaches to starting the homework set and class examples used as starting point for problem set.

No login is required; integer type is checked using both HTML min/max element and server-side PHP code using if/else statement.

Checkbox input is verified using if statement and errors are caught using flash message with Boostrap warning tag.

## References & Outside Code
* [Bootstrap](http://getbootstrap.com/) - Called as CDN Asset
* [Subtle Patterns](http://subtlepatterns.com/symphony/) - Background Image, Set Inside Stylesheet
* [Bootstrap Documentation](https://v4-alpha.getbootstrap.com/components/forms/) - Referenced for Form Elements
* [Lecture 3 Video (Canvas)](https://canvas.harvard.edu/courses/8224/pages/lecture-3-videos) - Referenced File Layout & Structure
* [Random Word Generator](http://listofrandomwords.com/) - Referenced for Generating Words List Array
