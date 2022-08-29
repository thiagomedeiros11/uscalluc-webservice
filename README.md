# Uscalluc Webservice

![Preview-Screens](https://github.com/thiagomedeiros11/uscalluc-webservice/blob/main/preview.png)


## Description

A PHP Webservice used for integration and communication between different applications with the UScall UC software.

Communication is carried out through the XML/HTTPS format using the SOAP protocol.

The WebService functions can be accessed through the WSDL document.

Responses are returned in JSON format. All functions must be accessed using an authentication token, this token is generated and maintained by the company administrator, and must be requested from him.

## Getting Started

### Prerequisites
To run this project, you'll need to clone this repository and move the files to your Apache directory.
In the tests, Apache Server version used was: Apache/2.4.54 (Unix).

### Installing

**Cloning the Repository**

```
$ git clone https://github.com/steniowagner/mindCast

$ cd mindCast

$ mv uscalluc-webservice /your-apache-directory
```

### Configuration
Inside the 'union.php' file, change the '$url' and '$token' variables to those informed by the system administrator.


## Questions or contributions
Feel free to send your PR if you want to contribute to the project.

Any questions I am available by email.

Email me: thiago.wav1@gmail.com