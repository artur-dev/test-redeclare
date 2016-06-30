<?php
namespace Artur\Test;

use JMS\Serializer\Annotation as JMS;

class User
{
    /**
     * @JMS\Type("integer")
     *
     * @var int
     */
    protected $id;
    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $username;
    /**
     * @JMS\Type("string")
     *
     * @var string
     */

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
}
