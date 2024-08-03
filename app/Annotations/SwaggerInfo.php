<?php

namespace App\Annotations;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Ride Request API Documentation",
 *      description="API documentation for our application",
 *      @OA\Contact(
 *          email="example@gmail.com"
 *      )
 * )
 */
class SwaggerInfo
{
    /**
     * @OA\Get(
     *     path="/api/users",
     *     @OA\Response(response="200", description="An example endpoint")
     * )
     */
    public function getUsers()
    {
    }
}
