# PrivacyChecker
A web app displaying your information (IP address, OS, ISP, location, etc...)

![PC2](https://user-images.githubusercontent.com/53975649/120770184-2e375100-c51e-11eb-9714-f0ffb4f2c97c.png)

## Installation

- Clone this repo
- Download dependencies with composer : 
    ```shell
     composer update
- Upload the "app" and "vendor" folders on a web server

## How it works
Three main steps :
1) Getting the IP address of the user,
2) Using geo2ip database (with the IP addres) to gather information about this IP address,
3) Use this information to display it on the page and to call a HERE maps API to show a map with the location of the user.
