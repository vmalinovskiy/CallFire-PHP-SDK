<?php

namespace CallFire\Api\Rest\Request;

use CallFire\Api\Rest\Request as AbstractRequest;

class QueryTexts extends AbstractRequest
{

    public $MaxResults = null;

    public $FirstResult = null;

    public $BroadcastId = null;

    public $BatchId = null;

    public $State = null;

    public $Result = null;

    public $Inbound = null;

    public $IntervalBegin = null;

    public $IntervalEnd = null;

    public $FromNumber = null;

    public $ToNumber = null;

    public $LabelName = null;

}