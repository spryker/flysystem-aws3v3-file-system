<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Service\FlysystemAws3v3FileSystem;

use Codeception\Actor;
use Generated\Shared\DataBuilder\FlysystemConfigAws3v3Builder;
use Generated\Shared\Transfer\FlysystemConfigAws3v3Transfer;

/**
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
 */
class FlysystemAws3v3FileSystemBusinessTester extends Actor
{
    use _generated\FlysystemAws3v3FileSystemBusinessTesterActions;

    /**
     * @param array<string, mixed> $seedData
     *
     * @return \Generated\Shared\Transfer\FlysystemConfigAws3v3Transfer
     */
    public function haveFlysystemConfigAws3v3Transfer(array $seedData = []): FlysystemConfigAws3v3Transfer
    {
        return (new FlysystemConfigAws3v3Builder($seedData))->build();
    }
}
