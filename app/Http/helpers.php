<?php
/**
    Helper functions for blade templates
 */
 
/*
 * Return username from a user_id
 *
 * @param int
 * @return array
 */
function formatUsername($id)
{
    $username = DB::table('users')->where('id', $id)->value('username');
    return $username;
}

/*
 * Return available statuses for a specific status
 *
 * @param string
 * @return array
 */
function getAvailableStatuses($status)
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
    
    if (array_key_exists($status, $statusRules))
    {
        return $statusRules[$status];
    }
    return []; 
}

/*
 * Return icon class for an issue status
 *
 * @param string
 * @return string
 */
function issueStatusIcon($status)
{
    $statuses = array(
        'open'      => 'fa-folder-open',
        'review'    => 'fa-eye',
        'deferred'  => 'fa-eye-slash',
        'approved'  => 'fa-check',
        'sandbox'   => 'fa-dropbox',
        'live'      => 'fa-comments',
        'suspended' => 'fa-pause',
        'closed'    => 'fa-check-circle-o',
        'deleted'   => 'fa-times-circle-o'
    );
    
    if (array_key_exists($status, $statuses))
    {
        return $statuses[$status];
    }
    return 'fa-question';   
}

/*
 * Return icon class for a user status
 *
 * @param string
 * @return string
 */
function userStatusIcon($status)
{
    $statuses = [
        'new'       => 'fa-user-plus',
        'pending'   => 'fa-fast-forward',
        'active'    => 'fa-check',
        'suspended' => 'fa-pause',
        'banned'    => 'fa-time-circle-o'  
    ];  
    
    if (array_key_exists($status, $statuses))
    {
        return $statuses[$status];
    }
    return 'fa-question';    
}

/*
 * Return icon class for a user type
 *
 * @param string
 * @return string
 */
function userTypeIcon($type)
{
    $types = [
        'admin'         => 'fa-user-secret',
        'editor'        => 'fa-users',
        'contributor'   => 'fa-users',
        'user'          => 'fa-user'
    ];
    
    if (array_key_exists($type, $types))
    {
        return $types[$type];
    }
    return 'fa-question'; 
}

/*
 * Return icon class for a activity type
 *
 * @param string
 * @return string
 */
function activityTypeIcon($type)
{
    $typeData = explode('_', $type);
    $types = [
        'issue'             => 'fa-clipboard',
        'question'          => 'fa-clipboard',
        'answer'            => 'fa-clipboard',
        'response'          => 'fa-file-text',
        'user'              => 'fa-user',
    ];
    
    if (array_key_exists($typeData[0], $types))
    {
        return $types[$typeData[0]];
    }
    return 'fa-question'; 
}

/*
 * Return icon class for a question type
 *
 * @param string
 * @return string
 */
function questionTypeIcon($type)
{
    $types = [
        'single_choice' => 'fa-minus',
        'multiple_choice' => 'fa-bars',
        'essay' => 'fa-pencil'
    ];
       
    if (array_key_exists($type, $types))
    {
        return $types[$type];
    }
    return 'fa-question'; 
}