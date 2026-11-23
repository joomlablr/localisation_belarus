<?php

/**
 * @package    Joomla.Language
 *
 * @copyright  (C) 2010 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 *
 * @phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps
 *
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * be-BY localise class.
 *
 * @since  1.6
 */
abstract class Be_BYLocalise
{
    /**
     * Returns the potential suffixes for a specific number of items
     *
     * @param   integer  $count  The number of items.
     *
     * @return  array  An array of potential suffixes.
     *
     * @since   1.6
     */
    /*public static function getPluralSuffixes($count)
    {
        switch ($count) {
            case 0:
                return ['0'];

            case 1:
                return ['ONE', '1'];
        }

        return ['OTHER', 'MORE'];
    }*/

    public static function getPluralSuffixes($count)
{
    $count = abs((int) $count);

    if ($count === 0) {
        return ['0', 'MANY', 'OTHER', 'MORE'];
    }

    if ($count % 10 === 1 && $count % 100 !== 11) {
        return ['ONE', '1'];
    }

    if (
        $count % 10 >= 2
        && $count % 10 <= 4
        && ($count % 100 < 12 || $count % 100 > 14)
    ) {
        return ['FEW', '2', 'OTHER', 'MORE'];
    }

    return ['MANY', 'OTHER', 'MORE'];
}





}
