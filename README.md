# PrivacyChecker
A web app displaying your information (IP address, OS, ISP, location, etc...)

![PrivacyChecker](https://user-images.githubusercontent.com/53975649/115956395-b9bfca00-a4fc-11eb-9f3c-3f22aa6ffa5a.png)

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