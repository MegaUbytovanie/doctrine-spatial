<?php
/**
 * This file is part of the doctrine spatial extension.
 *
 * PHP 7.4 | 8.0
 *
 * (c) Alexandre Tranchant <alexandre.tranchant@gmail.com> 2017 - 2021
 * (c) Longitude One 2020 - 2021
 * (c) 2015 Derek J. Lambert
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace LongitudeOne\Spatial\PHP\Types;

/**
 * Abstract LineString object for LINESTRING spatial types.
 */
abstract class AbstractLineString extends AbstractMultiPoint
{
    /**
     * Type of this geometry: Linestring.
     *
     * @return string
     */
    public function getType()
    {
        return self::LINESTRING;
    }

    /**
     * This line string is closed when first point is the same than last point.
     *
     * @return bool
     */
    public function isClosed()
    {
        return $this->points[0] === $this->points[count($this->points) - 1];
    }
}
