<?php
// Copyright 2004-present Bonwe. All Rights Reserved.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace Bonwe\WebDriver\Remote;

use Bonwe\WebDriver\WebDriverKeyboard;
use Bonwe\WebDriver\WebDriverKeys;

/**
 * Execute keyboard commands for RemoteWebDriver.
 */
class RemoteKeyboard implements WebDriverKeyboard
{
    /**
     * @var RemoteExecuteMethod
     */
    private $executor;

    /**
     * @param RemoteExecuteMethod $executor
     */
    public function __construct(RemoteExecuteMethod $executor)
    {
        $this->executor = $executor;
    }

    /**
     * Send keys to active element
     * @param string|array $keys
     * @return $this
     */
    public function sendKeys($keys)
    {
        $this->executor->execute(DriverCommand::SEND_KEYS_TO_ACTIVE_ELEMENT, [
            'value' => WebDriverKeys::encode($keys),
        ]);

        return $this;
    }

    /**
     * Press a modifier key
     *
     * @see WebDriverKeys
     * @param string $key
     * @return $this
     */
    public function pressKey($key)
    {
        $this->executor->execute(DriverCommand::SEND_KEYS_TO_ACTIVE_ELEMENT, [
            'value' => [(string) $key],
        ]);

        return $this;
    }

    /**
     * Release a modifier key
     *
     * @see WebDriverKeys
     * @param string $key
     * @return $this
     */
    public function releaseKey($key)
    {
        $this->executor->execute(DriverCommand::SEND_KEYS_TO_ACTIVE_ELEMENT, [
            'value' => [(string) $key],
        ]);

        return $this;
    }
}
