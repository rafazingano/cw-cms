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
    public function __construct($request, Lead $lead) {
        $this->lead = $lead;
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        $this->from('admin@agenciafleek.com.br', 'Agencia Fleek');
        $this->to('agenciafleek@gmail.com', 'Agencia Fleek');
        /* Verifica se tem algum lead_key e confere o valor */
        foreach ($this->request->all() as $req_k => $req_v) {
            $lead_value = LeadRule::where(['lead_key' => $req_k])->get();
            if (isset($lead_value) && count($lead_value) > 0) {
                foreach ($lead_value as $l_value) {
                    if (isset($l_value->lead_value)) {
                        $array_values = explode(',', $l_value->lead_value);
                        if (in_array($req_v, $array_values)) {
                            foreach ($l_value->users as $ul) {
                                $this->cc($ul->email, $ul->name);
                            }
                        }
                    }
                }
            }
        }
        /* Verifica se veio o lead_rule e compara com o slug do lead rule */
        if (isset($this->request->lead_rule)) {
            $lr = LeadRule::where(['slug' => $this->request->lead_rule])->first();
            $this->subject($lr->title);
            foreach ($lr->users as $u) {
                $this->cc($u->email, $u->name);
            }
        } else {
            $this->subject('Contato pelo site');
        }
        return $this->view('mails.contact');
    }

}
