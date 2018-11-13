<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactusNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $contact;
    protected $viewType;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact, $viewType)
    {
        // お問い合わせの内容
        $this->contact = $contact;
        // 送信or受信メールの毎に使用するviewの分岐
        $this->viewType = $viewType;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->text('mails.text_' . $this->viewType) // メール送信or受信のviewの切り分け
                ->view('mails.' . $this->viewType) // メール送信or受信のviewの切り分け
                ->to($this->contact['to'], $this->contact['to_name']) // 送信先
                ->from($this->contact['from'], $this->contact['from_name']) // 送信元
                ->subject($this->contact['subject']) // 件名
                ->with([
                    'contact' => $this->contact, // viewにcontactデータを渡す
                ]);
    }
}
