<?php
namespace CyberSource;
require_once '../com/cybersource/core/Authentication.php'; 
require_once 'TestConfiguration.php'; 
require_once '../com/cybersource/payloadDigest/PayloadDigest.php';
require_once '../cybersource-rest-client-php/AuthenticationSdk/com/cybersource/util/GlobalParameter.php';
class AuthenticationTest extends \PHPUnit_Framework_TestCase
{

    public function testGetJwtGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        $call = new Authentication();
        $method = "GET";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
       
        $tokenGeneratorMock = $this->getMockBuilder(JsonWebTokenGenerator::class)
                         ->setMethods(['generateToken'])
                         ->getMock();
        $tokenGeneratorMock->expects($this->once())
                 ->method('generateToken')
                 ->with($resourcePath, "", $method, $merchantConfig) 
                 ->willReturn($merchantObj->getResponseObjectJwt());
        $authTokenGeneratorMock = $this->getMockBuilder(Authentication::class)
                         ->setMethods(['getTokenGenerator'])
                         ->getMock();

        $authTokenGeneratorMock->expects($this->once())
                 ->method('getTokenGenerator')
                 ->with(GlobalParameter::JWT) 
                 ->willReturn($tokenGeneratorMock);
        //Comparing response        
        $this->assertEquals($merchantObj->getResponseObjectJwt(), $authTokenGeneratorMock->generateToken($resourcePath, "", $method, $merchantConfig));
    }


    public function testPostJwtGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        $call = new Authentication();
        $method = "GET";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $payload = new PayloadDigest();
        $filepath ="../cybersource-rest-client-php/CybersourceAuthenticationSdkPhp/resource/CreatePayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);
       
        $tokenGeneratorMock = $this->getMockBuilder(JsonWebTokenGenerator::class)
                         ->setMethods(['generateToken'])
                         ->getMock();
        $tokenGeneratorMock->expects($this->once())
                 ->method('generateToken')
                 ->with($resourcePath, $payloadData, $method, $merchantConfig) 
                 ->willReturn($merchantObj->postResponseObjectJwt());
        $authTokenGeneratorMock = $this->getMockBuilder(Authentication::class)
                         ->setMethods(['getTokenGenerator'])
                         ->getMock();

        $authTokenGeneratorMock->expects($this->once())
                 ->method('getTokenGenerator')
                 ->with(GlobalParameter::JWT) 
                 ->willReturn($tokenGeneratorMock);
        //Comparing response        
        $this->assertEquals($merchantObj->postResponseObjectJwt(), $authTokenGeneratorMock->generateToken($resourcePath, $payloadData, $method, $merchantConfig));
    }

    public function testPutJwtGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        $call = new Authentication();
        $method = "GET";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $payload = new PayloadDigest();
        $filepath ="../cybersource-rest-client-php/CybersourceAuthenticationSdkPhp/resource/PutPayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);
       
        $tokenGeneratorMock = $this->getMockBuilder(JsonWebTokenGenerator::class)
                         ->setMethods(['generateToken'])
                         ->getMock();
        $tokenGeneratorMock->expects($this->once())
                 ->method('generateToken')
                 ->with($resourcePath, $payloadData, $method, $merchantConfig) 
                 ->willReturn($merchantObj->putResponseObjectJwt());
        $authTokenGeneratorMock = $this->getMockBuilder(Authentication::class)
                         ->setMethods(['getTokenGenerator'])
                         ->getMock();

        $authTokenGeneratorMock->expects($this->once())
                 ->method('getTokenGenerator')
                 ->with(GlobalParameter::JWT) 
                 ->willReturn($tokenGeneratorMock);
        //Comparing response        
        $this->assertEquals($merchantObj->putResponseObjectJwt(), $authTokenGeneratorMock->generateToken($resourcePath, $payloadData, $method, $merchantConfig));
    }

    public function testGetHttpGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $call = new Authentication();
        $method = "GET";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
       
        $tokenGeneratorMock = $this->getMockBuilder(HttpSignatureGenerator::class)
                         ->setMethods(['generateToken'])
                         ->getMock();
        $tokenGeneratorMock->expects($this->once())
                 ->method('generateToken')
                 ->with($resourcePath, "", $method, $merchantConfig) 
                 ->willReturn($merchantObj->getResponseObjectHttp());
        $authTokenGeneratorMock = $this->getMockBuilder(Authentication::class)
                         ->setMethods(['getTokenGenerator'])
                         ->getMock();

        $authTokenGeneratorMock->expects($this->once())
                 ->method('getTokenGenerator')
                 ->with(GlobalParameter::HTTP_SIGNATURE) 
                 ->willReturn($tokenGeneratorMock);
        //Comparing response        
        $this->assertEquals($merchantObj->getResponseObjectHttp(), $authTokenGeneratorMock->generateToken($resourcePath, "", $method, $merchantConfig));
    }


    public function testPostHttpGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $call = new Authentication();
        $method = "GET";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $payload = new PayloadDigest();
        $filepath ="../cybersource-rest-client-php/CybersourceAuthenticationSdkPhp/resource/CreatePayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);
       
        $tokenGeneratorMock = $this->getMockBuilder(HttpSignatureGenerator::class)
                         ->setMethods(['generateToken'])
                         ->getMock();
        $tokenGeneratorMock->expects($this->once())
                 ->method('generateToken')
                 ->with($resourcePath, $payloadData, $method, $merchantConfig) 
                 ->willReturn($merchantObj->postResponseObjectHttp());
        $authTokenGeneratorMock = $this->getMockBuilder(Authentication::class)
                         ->setMethods(['getTokenGenerator'])
                         ->getMock();

        $authTokenGeneratorMock->expects($this->once())
                 ->method('getTokenGenerator')
                 ->with(GlobalParameter::HTTP_SIGNATURE) 
                 ->willReturn($tokenGeneratorMock);
        //Comparing response        
        $this->assertEquals($merchantObj->postResponseObjectHttp(), $authTokenGeneratorMock->generateToken($resourcePath, $payloadData, $method, $merchantConfig));
    }

    public function testPutHttpGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $call = new Authentication();
        $method = "GET";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $payload = new PayloadDigest();
        $filepath ="../cybersource-rest-client-php/CybersourceAuthenticationSdkPhp/resource/PutPayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);
       
        $tokenGeneratorMock = $this->getMockBuilder(HttpSignatureGenerator::class)
                         ->setMethods(['generateToken'])
                         ->getMock();
        $tokenGeneratorMock->expects($this->once())
                 ->method('generateToken')
                 ->with($resourcePath, $payloadData, $method, $merchantConfig) 
                 ->willReturn($merchantObj->putResponseObjectHttp());
        $authTokenGeneratorMock = $this->getMockBuilder(Authentication::class)
                         ->setMethods(['getTokenGenerator'])
                         ->getMock();

        $authTokenGeneratorMock->expects($this->once())
                 ->method('getTokenGenerator')
                 ->with(GlobalParameter::HTTP_SIGNATURE) 
                 ->willReturn($tokenGeneratorMock);
        //Comparing response        
        $this->assertEquals($merchantObj->putResponseObjectHttp(), $authTokenGeneratorMock->generateToken($resourcePath, $payloadData, $method, $merchantConfig));
    }

}