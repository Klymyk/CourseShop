<?php


namespace MVC\Models;

/**
 * Class Comment
 * @package MVC\Models
 * @table(comments)
 */
class Comment
{
    const PARENT_TYPE_ARTICLE = 0;
    const PARENT_TYPE_COMMENT = 1;

    /**
     * Unique key for comment
     *
     * @columnType(INT(11) NOT NULL)
     * @var int
     */
    private $id;

    /**
     * Unique key for article
     *
     * @columnType(INT(11) UNSIGNED NOT NULL)
     * @foreignModel(MVC\Models\Article)
     * @foreignField(id)
     * @var Article
     */
    private $article;
    /**
     * Unique key for User
     *
     * @columnType(INT(11) UNSIGNED NOT NULL)
     * @foreignModel(MVC\Models\User)
     * @foreignField(id)
     * @var User
     */
    private $user;

    /**
     * Count of likes
     *
     * @columnType(INT(11) UNSIGNED)
     * @var int
     */
    private $likes;

    /**
     * Count of dislikes
     *
     * @columnType(INT(11) UNSIGNED)
     * @var int
     */
    private $dislikes;

    /**
     * Body of article
     *
     * @columnType(TEXT NOT NULL)
     * @var String
     */
    private $body;

    /**
     * Date of creation
     *
     * @columnType(TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP)
     * @var \DateTime
     */
    private $created;

    /**
     * Parent Id - id of parent article, or parent comment,
     * or something else...
     *
     * @columnType(INT(11) UNSIGNED NOT NULL)
     * @foreignModel(MVC\Models\Article,MVC\Models\Comment)
     * @foreignField(id)
     * @var Article|Comment
     */
    private $parent;

    /**
     * Type of parent
     *
     * @columnType(TINYINT(1) UNSIGNED NOT NULL)
     * @foreignModel(MVC\Models\Article,MVC\Models\Comment)
     * @foreignField(id)
     * @var int
     */
    private $parentType;

}