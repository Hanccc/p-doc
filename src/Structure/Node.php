<?php


namespace Hanson\Algorithm\Structure;


class Node implements \Iterator
{

    /**
     * @var Int
     */
    protected $data;

    /**
     * @var Node|null
     */
    protected $next;

    public function __construct(Int $data, Node $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }

    /**
     * @return Int
     */
    public function getData(): Int
    {
        return $this->data;
    }

    /**
     * @return Node|null
     */
    public function getNext()
    {
        return $this->next;
    }

    public function setData(Int $data)
    {
        $this->data = $data;
    }

    public function setNext(Node $next = null)
    {
        $this->next = $next;
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return $this;
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        return $this->next;
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        // TODO: Implement key() method.
    }

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        // TODO: Implement valid() method.
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        // TODO: Implement rewind() method.
    }
}