<?php

/*
 * This file is part of the EasyWeChat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * News.php.
 *
 * @author    overtrue <i@overtrue.me>
 * @copyright 2015 overtrue <i@overtrue.me>
 *
 * @link      https://github.com/overtrue
 * @link      http://overtrue.me
 */

namespace EasyWeChat\Message;

use EasyWeChat\Support\Attribute;

/**
 * Class News.
 */
class News extends Attribute
{
    /**
     * Properties.
     *
     * @var array
     */
    protected $properties = [
                                'title',
                                'description',
                                'url',
                                'image',
                            ];
    /**
     * Aliases of attribute.
     *
     * @var array
     */
    protected $aliases = [
        'image' => 'pic_url',
    ];
}
