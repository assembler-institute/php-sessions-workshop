<?php

/**
 * This function must first check where are we
 *
 * If we are on index and we are already logged it must redirect
 * to the dashboard, if not it must check for login errors, login info or logouts
 *
 * If we are on dashboard it must check that we are already logged, if not
 * it must redirect us to the index and show an error
 */
function checkSession()
{
}

/**
 * This function must unset all session and cookies variables
 * and also destroy the session itself
 */
function destroySession()
{
}

/**
 * This function must get input form values and check them
 * If user is correct we must redirect user to the private area
 */
function authUser()
{
}

/**
 * This function must emulate a database user search and return
 * true in case email and password matches
 */
function checkUser(string $email, string $pass)
{
}

/**
 * This function is used to delete session Cookie
 */
function destroySessionCookie()
{
}

/**
 * This function is used to check for login errors
 */
function checkLoginError()
{
}

/**
 * This function is used to check for login information
 */
function checkLoginInfo()
{
}

/**
 * This function is used to check for logout
 */
function checkLogout()
{
}
