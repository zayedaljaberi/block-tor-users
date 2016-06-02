#BlockTorUsers v2.0
Tor users become risk for our servers as they can implement unethical practice into your website, server wihtout tracing as they are using tor routing.This method will allow you to block major list of tor users to access your website basically, our method will target the exit node and block it.


  - Version: 2.0 / Contribute with <a href="https://github.com/Mohamedzu"> Mohammed Alzubaidi</a>
  - Update: Automated way to that getting up-to-date every 30 min
  - Demo: http://wesecure.ae/toruser
  - Official Site: http://wesecure.ae/weserv

### You will have:
> - Automated generator that do up-to-date tor ip's
> - Enhance security using our customized .htaccess file
> - Refresh.php file that getting the up-to-date list from "Dan's" list.


#Download

```sh
git clone https://github.com/zayedaljaberi/block-tor-users/
```


### installation 
```sh
- Using FTP, SSH
- Using Cpanel

```

- FTP
Admin website can upload the files using ftp server of his website

- Cpanel
Admin user can upload the files using the cpanel given by the hosting company.


### Usage
1- Upload the our .htaccess file (Make sure you only have one .htaccess) it's always hidden so check your settings
2- Upload refresh.php file into directories that you the only one can access it (we advice to put it into multiple directories to enhance the security.)
Example (www.domain.com/stop/tor/status/refresh.php 

> Markdown that admin website should visit refresh.php site every 30+ to get his list up-to-date.
FYI. admin can create bash file to generate schedule for it.


License
----

WESECURE AE


**Enhance Your Security!**
