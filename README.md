<img src="https://media.giphy.com/media/141EHmJXwHngPK/giphy.gif" width="100%">

# Fine art gallery

> This is my first PHP school project.

The aim of this project is to make use of all the PHP fundamentals I've learned so far, such as using variables, data types, loops, functions and etc. The idea for this project was to create a fictional gallery website that showcases some fine art.
Check out the live website [here](https://marcushagerstrand.com/fine-art-gallery/).

## Getting started

1. #### Clone this repo to your desired folder

    ```
    git clone https://github.com/marcusxyz/fine-art-gallery.git
    ```

2. #### Start a local server

    ```
    php -S localhost:8000
    ```

3. #### Open [http://localhost:8000/php/index.php](http://localhost:8000/php/index.php) in your browser of choice

## Code Review

Code review written by [Emma Ramstedt](https://github.com/Deliciaes).

1. `variables.php:10-31` - Some keys contain the same data, for example the $mail variable and the email in the $contacts array contain the same information. Consider pulling the data from one source.
2. `functions.php:10-31` - Consider avoiding using HTML inside PHP (example: echo "<span class=\"dot dot-red\"></span>";).
3. `General:10-31` - Consider separating the header, index and footer files from the php folder.
4. `General:10-31` - For better accessibility, consider making clickable links stick out more from regular text.
5. `General:10-31` - Some files are missing, specifically grid.ss, screens.css, monte-civetta.jpeg

## Testers

Tested by the following people:

1. [Oliver Davis](https://github.com/DavisDavisDavis)
2. [Susanne Lam](https://github.com/s0wie)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for more
details.
