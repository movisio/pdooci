<?php
/**
 * PDOCI
 *
 * PHP version 8.1
 *
 * @category Iterator
 * @package  PDOOCI
 * @author   Eustáquio Rangel <eustaquiorangel@gmail.com>
 * @license  http://www.gnu.org/licenses/gpl-2.0.html GPLv2
 * @link     http://github.com/taq/pdooci
 */
namespace PDOOCI;

/**
 * Statement class of PDOOCI
 *
 * PHP version 8.1
 *
 * @category Statement
 * @package  PDOOCI
 * @author   Eustáquio Rangel <eustaquiorangel@gmail.com>
 * @license  http://www.gnu.org/licenses/gpl-2.0.html GPLv2
 * @link     http://github.com/taq/pdooci
 */
class StatementIterator implements \Iterator
{
    /**
     * Data array
     *
     * @var array
     */
    private array $_data;

    /**
     * Constructor
     *
     * @param mixed $statement statement
     */
    public function __construct(Statement $statement)
    {
        $this->_data = $statement->fetchAll();
    }

    /**
     * Return the current element
     * @link https://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     */
    #[TentativeType]
    public function current(): mixed
    {
        return current($this->_data);
    }

    /**
     * Move forward to next element
     * @link https://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    #[TentativeType]
    public function next(): void
    {
        next($this->_data);
    }

    /**
     * Return the key of the current element
     * @link https://php.net/manual/en/iterator.key.php
     * @return string|float|int|bool|null scalar on success, or null on failure.
     */
    #[TentativeType]
    public function key(): mixed
    {
        return key($this->_data);
    }

    /**
     * Checks if current position is valid
     * @link https://php.net/manual/en/iterator.valid.php
     * @return bool The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    #[TentativeType]
    public function valid(): bool
    {
        return isset($this->_data[key($this->_data)]);
    }

    /**
     * Rewind the Iterator to the first element
     * @link https://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    #[TentativeType]
    public function rewind(): void
    {
        reset($this->_data);
    }
}
