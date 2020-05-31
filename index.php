<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Scraper!</title>
</head>
<body>
    <ul style="width:60%">
        <?php

            include ('vendor/autoload.php');

            $client = new \Goutte\Client();
            $crawler = $client->request('GET', 'https://www.indeed.com/jobs?q=frontend%20developer&l=New%20York%2C%20NY&jt=fulltime&sort=date&vjk=439761a71c037dc6');
            $fullPageHtml = $crawler->html();

            $pageH1 = $crawler->filter('.jobsearch-SerpJobCard')->each(function($node){

                echo  '<li style="margin:20px 0"><div>'
                         . $node->filter('.title')->text() . 
                       '</div><div style="color:lightGrey">' . $node->filter('.sjcl')->text() . 
                       '</div><div style="color:grey">' 
                       . $node->filter('.summary')->text() .  
                       '</div></li>' ;
            })

            
        ?>
    </ul>
</body>
</html>