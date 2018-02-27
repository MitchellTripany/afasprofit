<?php

namespace Afas\Component\Soap;

/**
 * Provides an interface for handling Soap Requests.
 */
interface SoapClientInterface {

  /**
   * Performs A SOAP request.
   *
   * {@inheritdoc}
   */
  public function __doRequest($request, $location, $action, $version, $one_way = 0);

  /**
   * Returns list of available SOAP functions.
   *
   * @return array
   */
  public function __getFunctions();

  /**
   *
   */
  public function __getLastRequest();

  /**
   *
   */
  public function __getLastRequestHeaders();

  /**
   *
   */
  public function __getLastResponse();

  /**
   *
   */
  public function __getLastResponseHeaders();

  /**
   *
   */
  public function __getTypes();

  /**
   *
   */
  public function __setCookie($name, $value);

  /**
   *
   */
  public function __setLocation($new_location);

  /**
   *
   */
  public function __setSoapHeaders($soapheaders);

  /**
   *
   */
  public function __soapCall($function_name, $arguments, $options = [], $input_headers = NULL, &$output_headers = NULL);

}
