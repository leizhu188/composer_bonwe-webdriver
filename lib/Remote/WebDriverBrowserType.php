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

/**
 * All the browsers supported by selenium.
 *
 * @codeCoverageIgnore
 */
class WebDriverBrowserType
{
    const FIREFOX = 'firefox';
    const FIREFOX_PROXY = 'firefoxproxy';
    const FIREFOX_CHROME = 'firefoxchrome';
    const GOOGLECHROME = 'googlechrome';
    const SAFARI = 'safari';
    const SAFARI_PROXY = 'safariproxy';
    const OPERA = 'opera';
    const MICROSOFT_EDGE = 'MicrosoftEdge';
    const IEXPLORE = 'iexplore';
    const IEXPLORE_PROXY = 'iexploreproxy';
    const CHROME = 'chrome';
    const KONQUEROR = 'konqueror';
    const MOCK = 'mock';
    const IE_HTA = 'iehta';
    const ANDROID = 'android';
    const HTMLUNIT = 'htmlunit';
    const IE = 'internet explorer';
    const IPHONE = 'iphone';
    const IPAD = 'iPad';
    const PHANTOMJS = 'phantomjs';

    private function __construct()
    {
    }
}
