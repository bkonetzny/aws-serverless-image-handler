<?php

namespace kinoheld\AwsServerlessImageHandler;

class ImageHandler
{

	/** @var string */
	public $domain = null;

	/** @var string */
	public $bucket = null;

	/**
	 * Get the image URL.
	 *
	 * @param string $image
	 * @param array $edits
	 * @return string
	 */
	public function getUrl(string $image, array $edits = null)
	{
		$request = [
			'bucket' => $this->bucket,
			'key' => $image,
		];

		if ($edits) {
			$request['edits'] = $edits;
		}

		$encodedRequest = base64_encode(json_encode($request));

		return $this->domain . $encodedRequest;
	}

	/**
	 * Set the domain.
	 *
	 * @param string $domain
	 */
	public function setDomain(string $domain)
	{
		$this->domain = $domain;
	}

	/**
	 * Set the bucket.
	 *
	 * @param string $bucket
	 */
	public function setBucket(string $bucket)
	{
		$this->bucket = $bucket;
	}

}
