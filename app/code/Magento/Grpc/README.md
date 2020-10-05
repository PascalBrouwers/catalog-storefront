# Overview

This module provides gRPC entry point for Magento. Additionally, it provides possibility to expose gRPC APIs for other Magento modules

# Installation
* Run `bin/magento storefront:grpc:init` CLI command. The command does the following actions:
  * Copies certain bin files to `vendor/bin` directory
  * Register services for later use in gRPC sever
* Install `rr-grpc` server - https://github.com/spiral/php-grpc. Put the binary in some directory registered in PATH system variable
You can also run the following script to install `rr-grpc`:
```
curl -LJO https://github.com/spiral/php-grpc/releases/download/v1.4.0/rr-grpc-1.4.0-linux-amd64.tar.gz
tar -xzf rr-grpc-1.4.0-linux-amd64.tar.gz
cp rr-grpc-1.4.0-linux-amd64/rr-grpc /usr/bin
rm -rf rr-grpc-1.4.0-linux-amd64 rr-grpc-1.4.0-linux-amd64.tar.gz 
```
* Install `protoc-gen-php-grpc` protoc plugin - https://github.com/spiral/php-grpc. Put the binary in some directory registered in PATH system variable.
You can also run the following script to install `protoc-gen-php-grpc`:
```
curl -LJO https://github.com/spiral/php-grpc/releases/download/v1.4.0/protoc-gen-php-grpc-1.4.0-linux-amd64.tar.gz
tar -xzf protoc-gen-php-grpc-1.4.0-linux-amd64.tar.gz
cp protoc-gen-php-grpc-1.4.0-linux-amd64/protoc-gen-php-grpc /usr/bin/grpc_php_plugin
rm -rf protoc-gen-php-grpc-1.4.0-linux-amd64 protoc-gen-php-grpc-1.4.0-linux-amd64.tar.gz
```
* Install `protoc` (protocol compiler) - https://github.com/protocolbuffers/protobuf#protocol-compiler-installation. Put the binary in some directory registered in PATH system variable
You can also run the following command to install `protoc`:
```
apt update
apt install -y protobuf-compiler
```
* Alternatively module `module-grpc` can be installed via composer if not installed via git yet.
`composer require magento/module-grpc:0.0.1`. Please make sure the package is present in packagist. 

# Usage
* Launch `./vendor/bin/grpc-server` in Magento root. You can also use this file as a reference for your gRPC configuration.
* In case of any code changes repeat all steps from `Usage` section

# gRPC services development
* Declare your proto files in proto3 syntax. The tooling is able to find proto files in `/etc` directory of Magento modules.   
* Launch `/bin/magento proto:marshal` in order to get autogenerated interfaces and DTOs
* Implement interfaces generated by previous step in your module and add appropriate preferences to di.xml file