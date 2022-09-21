<?php
/**
 * Copyright 2017 Horde LLC (http://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (BSD). If you
 * did not receive this file, see http://www.horde.org/licenses/bsd.
 *
 * @author   Jan Schneider <jan@horde.org>
 * @category Horde
 * @license  http://www.horde.org/licenses/bsd BSD
 * @package  Cli_Application
 */
namespace Horde\Cli\Application;

use Horde_Argv_Parser as Parser;
use Horde_Cli as Cli;
use Horde\Cli\Application\Exception;
use Horde\Cli\Application\Translation;

/**
 * Modular Kernel
 *
 * Composable kernel assembling an application from modules
 *
 * 
 * @author    Ralf Lang <ralf.lang@ralf-lang.de
 * @category  Horde
 * @copyright 2022 Horde LLC
 * @license   http://www.horde.org/licenses/bsd BSD
 * @package   Cli_Application
 *
 */
class ModularKernel implements KernelInterface
{
    public function __construct()
    {

    }

    public static function build(): ModularKernel
    {
        // We need an environment
        // We need a CLI IO
        // We need a list of Modules
        // We need a config container

        return new ModularKernel;
    }

    public function run()
    {
        // Preflight checks
    }
}