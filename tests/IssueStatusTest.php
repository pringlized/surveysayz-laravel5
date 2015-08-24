<?php
    
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IssueStatusTest extends TestCase
{
    public function testGetAvailableIssuesStatus()
    {
        $statusRules = [
            'open'      => ['open','review','deferred'],
    	    'review'    => ['review','deferred','approved'],
            'deferred'  => ['review','deferred','approved'],
            'approved'  => ['review','deferred','approved','sandbox','live'],
            'sandbox'   => ['review','deferred','approved','sandbox','live'],
            'live'      => ['live','suspended','closed'],
    	    'suspended' => ['live','suspended','closed'],
    	    'closed'    => ['closed','deleted'],
    	    'deleted'   => ['deleted']
        ];
        
        // make sure easch set of appropiate rules are returned
        foreach ($statusRules as $status => $rules)
        {
            $this->assertEquals(getAvailableStatuses($status), $rules);
        }
        
        // make sure an empty array is returned for a incorrect status
        $this->assertEmpty(getAvailableStatuses('not_set'), []);
    }
}