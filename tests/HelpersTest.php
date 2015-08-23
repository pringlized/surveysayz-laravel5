<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelpersTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */    
    public function testGetUsername()
    {
        $username = formatUsername(1);
        $this->assertEquals($username, 'allKindsOfIssues');       
    }
    
    public function testIssueStatusIcon()
    {
        $statuses = [
            'open'      => 'fa-folder-open',
            'review'    => 'fa-eye',
            'deferred'  => 'fa-eye-slash',
            'approved'  => 'fa-check',
            'sandbox'   => 'fa-dropbox',
            'live'      => 'fa-comments',
            'suspended' => 'fa-pause',
            'closed'    => 'fa-check-circle-o',
            'deleted'   => 'fa-times-circle-o'
        ];
        
        // test each status and it's desired icon class
        foreach ($statuses as $status => $icon)
        {
            $this->assertEquals(issueStatusIcon($status), $icon);
        }
        
        // if status not found
        $this->assertEquals(issueStatusIcon('not_set'), 'fa-question');
    }
    
    public function testUserStatusIcon()
    {
        $statuses = [
            'new'       => 'fa-user-plus',
            'pending'   => 'fa-fast-forward',
            'active'    => 'fa-check',
            'suspended' => 'fa-pause',
            'banned'    => 'fa-time-circle-o'  
        ];
        
        // test each status and it's desired icon class
        foreach ($statuses as $status => $icon)
        {
            $this->assertEquals(userStatusIcon($status), $icon);
        }
        
        // if status not found
        $this->assertEquals(userStatusIcon('not_set'), 'fa-question');
    }
    
    public function testUserTypeIcon()
    {
        $types = [
            'admin'         => 'fa-user-secret',
            'editor'        => 'fa-users',
            'contributor'   => 'fa-users',
            'user'          => 'fa-user'
        ];
        
        // test each type and it's desired icon class
        foreach ($types as $type => $icon)
        {
            $this->assertEquals(userTypeIcon($type), $icon);
        }
        
        // if type not found
        $this->assertEquals(userTypeIcon('not_set'), 'fa-question');
    }
    
    public function testActivityTypeIcon()
    {
        $activities = [
            'issue_create'             => 'fa-clipboard',
            'question_update'          => 'fa-clipboard',
            'answer_create'            => 'fa-clipboard',
            'response_update'          => 'fa-file-text',
            'user_update'              => 'fa-user',
        ];

        // test each type and it's desired icon class
        foreach ($activities as $activity => $icon)
        {
            $this->assertEquals(activityTypeIcon($activity), $icon);
        }
        
        // if type not found
        $this->assertEquals(activityTypeIcon('not_set'), 'fa-question'); 
    }
    
    public function testQuestionTypeIcon()
    {
        $questionTypes = [
            'single_choice' => 'fa-minus',
            'multiple_choice' => 'fa-bars',
            'essay' => 'fa-pencil'
        ];
        
        // test each type and it's desired icon class
        foreach ($questionTypes as $type => $icon)
        {
            $this->assertEquals(questionTypeIcon($type), $icon);
        }
        
        // if type not found
        $this->assertEquals(questionTypeIcon('not_set'), 'fa-question'); 
    }
}
