<html>
    <body>
        <?php
            $hello="{\"data\":{\"id\":\"pi_4NJ9h2cRtzqtHdMiGbUwLvTu\",\"type\":\"payment_intent\",\"attributes\":{\"amount\":10000000,\"currency\":\"PHP\",".
                "\"description\":null,\"statement_descriptor\":\"PAYMONGO\",\"status\":\"succeeded\",\"livemode\":false,".
                "\"client_key\":\"pi_4NJ9h2cRtzqtHdMiGbUwLvTu_client_QVwB9TVvwYuMGmrTm5fqM4Dp\",\"created_at\":1635487863,\"updated_at\":1635487925,".
                "\"last_payment_error\":null,\"payment_method_allowed\":[\"paymaya\",\"card\"],\"payments\":[{\"id\":\"pay_eDeLdQ3hpdeHCJZzBRfaACDz\",\"type\":\"payment\",".
                    "\"attributes\":{\"access_url\":null,\"amount\":10000000,\"balance_transaction_id\":\"bal_txn_uyu17bT4YDXVcw3aNftSPNYX\",\"billing\":null,\"currency\":\"PHP\",".
                        "\"description\":null,\"disputed\":false,\"external_reference_number\":null,\"fee\":351500,\"foreign_fee\":0,\"livemode\":false,\"net_amount\":9648500,".
                        "\"origin\":\"api\",\"payment_intent_id\":\"pi_4NJ9h2cRtzqtHdMiGbUwLvTu\",\"payout\":null,\"source\":{\"id\":\"card_kghbooUzv727xz5qNMBDaj3M\",".
                            "\"type\":\"card\",\"brand\":\"visa\",\"country\":\"PH\",\"last4\":\"1421\"},\"statement_descriptor\":\"PAYMONGO\",\"status\":\"paid\",".
                            "\"tax_amount\":null,\"refunds\":[],\"taxes\":[],\"available_at\":1636102800,\"created_at\":1635487925,\"paid_at\":1635487925,\"updated_at\":1635487925}}],".
                            "\"next_action\":null,\"payment_method_options\":{\"card\":{\"request_three_d_secure\":\"any\"}},\"metadata\":null}}}";
            $new = json_decode($hello);
            $fourdigi = $new->data->attributes->payments[0]->attributes->source->last4;
            echo $fourdigi;
        ?>
    </body>
</html>