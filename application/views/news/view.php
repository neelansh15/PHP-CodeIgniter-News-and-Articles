<?php
    echo '<h2>'.$news_item['title'].'</h2>';
    echo $news_item['text'];
?>
<br>
<a href="<?php echo site_url('news/') ?>">Back to Home - View all articles</a>