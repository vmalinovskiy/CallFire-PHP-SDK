<?php

namespace CallFire\Api\Rest\Request;

use CallFire\Api\Rest\Request as AbstractRequest;

class QueryAgentSessions extends AbstractRequest
{

    /**
     * Max number of results to return limited to 1000 (default: 1000)
     */
    protected $maxResults = null;

    /**
     * Start of next result set (default: 0)
     */
    protected $firstResult = null;

    /**
     * Unique ID of CCC Campaign
     */
    protected $campaignId = null;

    /**
     * Unique ID of agent
     */
    protected $agentId = null;

    /**
     * Unique email of agent
     */
    protected $agentEmail = null;

    /**
     * Only return active sessions
     */
    protected $active = null;

    public function getMaxResults()
    {
        return $this->maxResults;
    }

    public function setMaxResults($maxResults)
    {
        $this->maxResults = $maxResults;

        return $this;
    }

    public function getFirstResult()
    {
        return $this->firstResult;
    }

    public function setFirstResult($firstResult)
    {
        $this->firstResult = $firstResult;

        return $this;
    }

    public function getCampaignId()
    {
        return $this->campaignId;
    }

    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    public function getAgentId()
    {
        return $this->agentId;
    }

    public function setAgentId($agentId)
    {
        $this->agentId = $agentId;

        return $this;
    }

    public function getAgentEmail()
    {
        return $this->agentEmail;
    }

    public function setAgentEmail($agentEmail)
    {
        $this->agentEmail = $agentEmail;

        return $this;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

}
