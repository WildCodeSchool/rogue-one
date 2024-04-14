![](indiana-jones.jpeg)

# PHP and the Kingdom of the Crystal Skull


## Objectives

Welcome dear explorer ! Your quest is to find the crystal skull (AKA `crystal-skull.txt`) across the diferents rooms of this temple !
Once you have found it, give the full path from temple to the crystall skull.


You can try looking by yourself in each rooms but there are so numerous you'll spend all your life (and a lot of nested foreach) before reach your goal !
Or, you can be smart and find a quick qnd short way to find it ! 

## Hints
1. One Php function which can be usefull : `scandir()` [see documentation](http://php.net/manual/fr/function.scandir.php)
2. You can start by finding an exemple file in a two level folder, with as many as needed `foreach`, and after, try to find the real one with recursivity.
3. Use `indi.php` file to write your code
4. Test it in CLI with the command
```bash
php indi.php
```