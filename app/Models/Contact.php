<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'company_name',
        'email',
        'subject',
        'message',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [

    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'name' => 'string',
            'company_name' => 'string',
            'email' => 'string',
            'subject' => 'string',
            'message' => 'string'
        ];
    }

    /**
     * Send an email from a contact object
     *
     * @param int $id
     *
     * @return bool
     */
    public static function sendemail(int  $id): bool
    {
        $contact = Contact::find($id);

        $message = "Website Contact\r\n";
        $message .= "Name: $contact->name\r\n";
        $message .= "Company Name: $contact->company_name\r\n";
        $message .= "\r\n\r\n";
        $message .= $contact->message;

        $to = "asimon1984@gmail.com";
        $subject = $contact->subject;
        $message = $message;
        $headers = "From: $contact->email\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        $success = mail($to, $subject, $message, $headers);

        $contact->sent = $success;

        return $success;
    }
}
