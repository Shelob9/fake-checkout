# Fake Checkout

This is a simple app designed to simulate checkout via a service, for example Stripe, that requires a redirect.

## Local Development

### Requirements
* git
* PHP

### Steps

* Install
    * `git clone https://github.com/Shelob9/fake-checkout`
    * `cd fake-checkout && composer install`
* Start server
    * `composer start`
    
## Usage

This simulates going to a page, entering payment details, clicking a button and returning with a token

Request URL: http://localhost:8080
Query Params:
    * redirect: REQUIRED. URL to redirect back to. Must be URL encoded.
    * token: OPTIONAL. Token to append to redirect url. If none set, return url will include &token=12345
  
* If you make a request to server `http://localhost:8080/?redirect=https%3A%2F%2Fsaturdaydrive.io%2F` It will show you a link, if you click it, you will go to `https://saturdaydrive.io?token=12345`
* If you make a request to server `http://localhost:8080/?redirect=https%3A%2F%2Fsaturdaydrive.io%2F&token=fancy` It will show you a link, if you click it, you will go to https://saturdaydrive.io?token=fancy

