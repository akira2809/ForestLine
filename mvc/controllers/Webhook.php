<?php


use PayOS\PayOS;

class Webhook extends Controller
{
    public $model_order;
    function __construct()
    {
        $this->model_order = $this->model('M_order');
    }
    public function handle_webhook()
    {
        $rawData = file_get_contents("php://input");
        $webhookData = json_decode($rawData, true);

        if (!$webhookData) {
            http_response_code(400);
            echo "Invalid request";
            exit;
        }
        $clientId = _CLIENT_ID;
        $apiKey = _API_KEY;
        $checksumKey = _CHECKSUM_KEY;
        $payOS = new PayOS($clientId, $apiKey, $checksumKey);

        try {
            $verifiedData = $payOS->verifyPaymentWebhookData($webhookData);
            $orderCode = $verifiedData['orderCode'];
            $status = $verifiedData['status'];

            if ($status === 'SUCCESS') {
                $this->model_order->update_payment_status($orderCode, 'SUCCESS');
                http_response_code(200);
            } else {
                $this->model_order->update_payment_status($orderCode, $status);
                http_response_code(200);
            }
        } catch (\Exception $e) {
            http_response_code(400);
            echo "Error: " . $e->getMessage();
        }
    }
}
