<?php
namespace Jamm\HTTP;

interface IResponse
{
	public function getStatusCode();

	/** @param int $status_code     */
	public function setStatusCode($status_code);

	/**
	 * Set header for the response
	 * @param string $header
	 * @param string|number $value
	 */
	public function setHeader($header, $value);

	public function getHeader($header);

	/**
	 * Get body of the response
	 * @return string
	 */
	public function getBody();

	/**
	 * Set body of the response
	 * @param $body
	 */
	public function setBody($body);

	public function getHeaders();

	public function setHeaders(array $headers);

	/**
	 * Send headers and body to output
	 */
	public function Send();

	public function getSerializationHeader();

	public function setSerializationHeader($serialization_header = 'ACCEPT');

	/**
	 * @param ISerializer|NULL $Serializer
	 */
	public function setSerializer($Serializer);

	/**
	 * @return ISerializer|NULL
	 */
	public function getSerializer();

	public function isStatusError();
}
