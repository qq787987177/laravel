<?php
/**
 * Created by PhpStorm.
 * User: AAA
 * Date: 2018/3/6
 * Time: 16:14
 */

namespace App\Exceptions;

use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class AppException extends HttpException
{
    private $errno = '';

    /**
     * Constructor.
     *
     * @param string $message The internal exception message
     * @param string $errno
     * @param \Exception $previous The previous exception
     * @param int $code The internal exception code
     */
    public function __construct($message = null, $errno = "BUSINESS_ERROR", \Exception $previous = null, $code = 0)
    {
        parent::__construct(200, $message, $previous, array(), $code);
        $this->errno = $errno;
    }

    public function getStatusCode()
    {
        return Response::HTTP_OK;
    }

    public function getErrno()
    {
        return $this->errno;
    }
}