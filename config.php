<?php
/**
 * HotelClub
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled with this
 * package in the file LICENSE.txt. It is also available through the
 * world-wide-web at this URL:
 * http://www.opensource.org/licenses/bsd-license.php
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world-wide-web, please send an email to license@hotelclub.com so
 * we can send you a copy immediately.
 *
 * @category   HotelClub
 * @package    Config
 * @subpackage PHP
 * @copyright  Copyright (c) 2010 HotelClub Pty Ltd (http://www.hotelclub.com)
 * @license    http://www.opensource.org/licenses/bsd-license.php    New BSD License
 * @version    SVN: $Id$
 */

/**
 * Affiliate ID.
 *
 * @var int
 */
$config['affiliate']['id'] = null;

/**
 * Affiliate Password.
 *
 * @var string
 */
$config['affiliate']['password'] = null;

/**
 * Disable Cache.
 *
 * Disable caching of web service responses.
 *
 * @var bool
 */
$config['cache']['disable'] = false;

/**
 * Cache TTL.
 *
 * Cache time-to-live in seconds.
 *
 * @var int
 */
$config['cache']['ttl']['default'] = 86400;