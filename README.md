# public_data_server

very simple php server that allows posting of anonymous data typically from a client app like a video game advertising it's server address or a simple highscore/level code (to save a user progress).

by the nature of it's design is inherently insecure with minimum protection from attack, only used to post unvaluable data... i wrote this to allow multiplayer servers to advertise themselves and my videogame client's server browser to find these.

there are no real laws on the internet, look at what even big companies do haha! however i only share a users IP to this server if he decides to advertise it... Xbox shares your IP with clients, it's all relative, when any game hits the internet you need to maintain a dicipline... do not create any weird ass remote code execution features etc, you have the force... use it!

## Requirements:

-Webserver with PHP support
-MySQL Database

you could host such a server yourself or sign up with a service provider, for example you can get a free account here:
https://www.000webhost.com/

## Instructions:

* get a webserver (https://www.000webhost.com/)

* fill out the file "database_credentials.php" with your database login info, check with you host for this... you normally need to actually create the MySQL database of which you are usually provided only one free one.

* deploy these files:
	* database_credentials.php
	* get_data.php
	* add_data.php
	* setup.php

* run setup.php by browsing to your webserver www.mywebserver.com/setup.php, this will set up a table on MySQL

* now it works!


## Issues:

based upon and adapted from but some of the code was odd forcing me to write this so won't have much left from this in the end:
https://github.com/louis-e/PSL-Leaderboard-System

-password not yet implemented, will do but is still not designed for high security (if using user generated passwords, this will require bcrypt)



