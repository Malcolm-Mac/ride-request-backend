<?php

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

 /**
 * @OA\PathItem(
 *     path="/api"
 * )
 */

/**
 * @OA\Post(
 *      path="/api/auth/login",
 *      tags={"Login"},
 *      summary="Authenticate a user",
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  type="object",
 *                  @OA\Property(
 *                      property="email",
 *                      type="string",
 *                      description="User's email address"
 *                  ),
 *                  @OA\Property(
 *                      property="password",
 *                      type="string",
 *                      description="User's password"
 *                  )
 *              )
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(
 *              type="object",
 *              @OA\Property(
 *                  property="success",
 *                  type="boolean",
 *                  example=true
 *              ),
 *              @OA\Property(
 *                  property="data",
 *                  type="object",
 *                  @OA\Property(
 *                      property="email",
 *                      type="string"
 *                  ),
 *                  @OA\Property(
 *                      property="password",
 *                      type="string"
 *                  )
 *              )
 *          )
 *      ),
 *      @OA\Response(
 *          response=400,
 *          description="Bad request",
 *          @OA\JsonContent(
 *              type="object",
 *              @OA\Property(
 *                  property="success",
 *                  type="boolean",
 *                  example=false
 *              ),
 *              @OA\Property(
 *                  property="errors",
 *                  type="object",
 *                  @OA\Property(
 *                      property="message",
 *                      type="string"
 *                  )
 *              )
 *          )
 *      ),
 *      @OA\Response(
 *          response=500,
 *          description="Internal server error"
 *      )
 * )
 */
