<?php
class PaymentService
{
    public function createQRCode($amount, $description)
    {
        $url = _PAYOS_API_URL;
        $data = [
            'client_id' => _PAYOS_CLIENT_ID,
            'amount' => $amount,
            'description' => $description,
        ];
        $headers = [
            "Content-Type: application/json",
            "Authorization: Bearer " . _PAYOS_API_KEY,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($response, true);
        return $result['data']['qr_url'] ?? null;
    }
}
