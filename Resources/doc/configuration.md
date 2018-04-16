#Configuration Reference

There are 3 paramaters in the configuration of the Doctrine encryption bundle which are all optional.

* **secret_key** - The key used to encrypt the data (256 bit)
    * 32 character long string
    * Default: empty, the bundle will use your Symfony2 secret key.

* **encryptor** - The encryptor used to encrypt the data
    * Encryptor name, currently available: rijndael128 and rijndael256
    * Default: rijndael256

* **encryptor_class** - Custom class for encrypting data
    * Encryptor class, [your own encryptor class](https://github.com/ambta/DoctrineEncryptBundle/blob/master/Resources/doc/custom_encryptor.md) will override encryptor paramater
    * Default: empty
    
## yaml

``` yaml
Triggerfish_doctrine_encrypt:
    secret_key:           AB1CD2EF3GH4IJ5KL6MN7OP8QR9ST0UW # Your own random 256 bit key (32 characters)
    encryptor:            rijndael256 # rijndael256 or rijndael128
    encryptor_class:      \Triggerfish\DoctrineEncryptBundle\Encryptors\Rijndael256Encryptor # your own encryption class
```

### xml

``` xml 
<Triggerfish_doctrine_encrypt:config>
        <!-- Your own random 256 bit key (32 characters) -->
        <Triggerfish_doctrine_encrypt:secret_key>AB1CD2EF3GH4IJ5KL6MN7OP8QR9ST0UW</Triggerfish_doctrine_encrypt:secret_key>
        <!-- rijndael256 or rijndael128 -->
        <Triggerfish_doctrine_encrypt:encryptor>rijndael256</Triggerfish_doctrine_encrypt:encryptor>
        <!-- your own encryption class -->
        <Triggerfish_doctrine_encrypt:encryptor_class>\Triggerfish\DoctrineEncryptBundle\Encryptors\Rijndael256Encryptor</Triggerfish_doctrine_encrypt:encryptor_class>
</Triggerfish_doctrine_encrypt:config>
```

## Usage

Read how to use the database encryption bundle in your project.

#### [Usage](https://github.com/ambta/DoctrineEncryptBundle/blob/master/Resources/doc/usage.md)