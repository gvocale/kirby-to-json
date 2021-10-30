I wanted to move my sites from Kirby to Gatsby, but I was running into issues reading Kirby's custom markdown to frontmatter's valid markdown.

This repo is a fork of getkirby/plainkit, to which I've added a script in /run, which loops over each page and generate a json file with the page field.

I will then use these json in Gatsby to access the data, rather then Kirby's original .txt files.

### Develop

If you want to use PHP's built-in server, you have to start it up with Kirby's router:

```sh
php -S localhost:8000 kirby/router.php
```

### Run

Open in your browser http://localhost:8000/run
