<?php
/**
 * Copyright (c) 2018 Bitcoin Viet Nam Co., Ltd.
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 *  and associated documentation files (the "Software"), to deal in the Software without restriction,
 *  including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 *  and/or sell copies of the Software, and to permit persons to whom the Software is furnished to
 *  do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all copies or substantial
 *  portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 *  INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 *  PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *  COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 *  ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 *  THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 02.02.18
 * Time: 13:22
 */

namespace BitcoinVietnam\BitcoinVietnam\Response\Account\GetAccount\Account;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Balance
 * @package BitcoinVietnam\BitcoinVietnam\Response\Account\GetAccount\Account
 */
class Balance
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("currency")
     */
    private $currency;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("balance")
     */
    private $balance;

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }
}