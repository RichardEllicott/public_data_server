# public_data_server

very simple php server that allows posting of anonymous data typically from a client app like a video game advertising it's server address or a simple highscore/level code (to save a user progress).

by the nature of it's design is inherently insecure with minimum protection from attack, only used to post unvaluable data... i wrote this to allow multiplayer servers to advertise themselves and my videogame client's server browser to find these.

security is a logical subject that no multiplayer code designer can ever avoid, it works much the same on computers as it does in the real world. If you meet a new freind in the real world... give him your phone number by all means, just don't give him the keys to your house!

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

-this one has a completely different style on each script, works but is odd (it's only intended for highscores)

-from this legacy i need to adapt away the MYSQLi to PDO in the "get_data.php" file

-password not yet implemented, will do but is still not designed for high security (if using user generated passwords, this will require bcrypt)

-getting back the data, we are using the <br> tag, someone could shove some tags in to disrupt the people using this service.. potential DOS attack on my game itself really