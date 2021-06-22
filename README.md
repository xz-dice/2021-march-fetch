# [2021-march-fetch](https://dev.io-academy.uk/projects/2021-march/fetch/)

**About Fetch**

Fetch is an OOP PHP app which scrapes data from an API into a MySQL database and displays dogs so that you can get an idea of which dog is best for you.

**Installation**

Clone
- To install the repo, go to your terminal and `git clone git@github.com:iO-Academy/2021-march-fetch.git`

Auto Loading
- To check if you have `Composer` installed, run the command `composer`
- Make it available globally by running `mv composer.phar /usr/local/bin/composer`
- If you do not have `Composer`, download from `https://getcomposer.org/download/`

Database and scraping
- Create a database called `fetch`
- Import the `fetch.sql` file
- Input your local DB credentials into `scrapeData.php`
- To scrape the data, run the command `php scrapeData.php` from the `scripts` directory 

