<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Lead;
use App\LeadRule;

class Contact extends Mailable {

    use Queueable,
        SerializesModels;

    public $lead;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Lead $lead) {
        $this->lead = $lead;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        $this->from('admin@agenciafleek.com.br', 'Agencia Fleek');
        if (isset($this->lead->lead_rule)) {
            $lr = LeadRule::where(['slug' => $this->lead->lead_rule])->first();
            $this->subject($lr->title);
            foreach ($lr->users as $u) {
                $this->to($u->email);
            }
        }else{
            $this->to('rzingano@agenciafleek.com.br');
        }
        return $this->view('mails.contact');
    }

}
