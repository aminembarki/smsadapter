# smsadapter
SMS Adapter


// creating a post and posting to Twitter, Instagram or Facebook
$post = new Post();

// if want to use Twitter
$post->setServiceAdapter(new TwitterService()); // OR

// if want to use Instagram
$post->setServiceAdapter(new InstagramService()); // OR maybe

// if want to use Facebook or another social network adapter
$post->setServiceAdapter(new FacebookService());

$post->description = 'My first post to Twitter. Just for fun!';
$post->url = 'http://juniorgrossi.com';
$post->send();