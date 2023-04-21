<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
    public function __construct(protected ApiClient $client)
    {
        //
    }
    public function subscribe(string $email, string $List = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client->lists->addListMember(config($list), [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
}
