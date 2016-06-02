#BlockTorUsers v2.0
Tor users become risk for our servers as they can implement unethical practice into your website, server wihtout tracing as they are using tor routing.This method will allow you to block major list of tor users to access your website basically, our method will target the exit node and block it.


  - Version: 2.0
  - Update: Automated way to that getting up-to-date every 30 min
  - Demo: http://wesecure.ae/toruser
  - Official Site: http://wesecure.ae/weserv

### You will have:
> - Automated generator that do up-to-date tor ip's
> - Enhance security using our customized .htaccess file
> - Refresh.php file that getting the up-to-date list from "Dan's" list.





### Downloads
- Download using the website 
- Download using terminal
- 
> Markdown that these information is important and useful to know better about whom trying to attack your website.
```sh
git clone https://github.com/zayedaljaberi/honeypot_fakecms
```

you will have to download two folders: "admin" and "Error"

Admin Folder will have:
- Index.php : This file is contain the interface and style of the fake admin portal login.
* portal.php - Here is where the action comes, when the user just visit the site it will automatically send you an email the ip of attacker. Then it will automatically redirect you to "Error" Folder.

> After the attacker try to use username and password to login, automatically it will get redirect to Error Folder.

Error Folder will have:
- Index.php : This file is contain the interface and style of the fake admin portal login. 
* portal.php - Here it will send you an email saying that the attacker try to attempt an bruteforce attack.



### Installation

Creating the fakecms requires [Github Files](https://github.com/zayedaljaberi/honeypot_fakecms)

You need to upload files into your hosting /www :

```sh
upload files using FTP or manually. 
```
Edit portal.php files (two files)
```sh
$ Change the email given to your email
```
To know the attacker location [Find the IP](https://www.iplocation.net)
### Security+
 - Always make sure to secure permission of the folders.
- Never put your admin page on links like /admin , /wp-admin, /login..etc
- Try to hide your admin portal page into several folders and different names
- Take advantages of the .htaccess file for security. [Download PDF](https://goo.gl/JqZywC)
- Get vaild SSL certificate for your website.


### Analytics| in 5 days we had more than 450+ ip

More details on [weserv](http://wesecure.ae/weserv/honeypot_fakecms).

License
----

WESECURE AE


**Enjoy and let them trap!**
