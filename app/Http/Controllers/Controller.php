<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class Controller extends BaseController
{
    /**
     * Отправка письма
     * @param Request $request
     * @return JsonResponse
     */
    public function send(Request $request): JsonResponse
    {
        $name = $request->post('name');
        $phone = $request->post('phone');
        $email = $request->post('email');
        $body = $request->post('body', '');

        $to  = "npo.roscom05@yandex.ru";

        $subject = "Землеустроительная экспертиза";

        $message = 'Имя: ' . $name. "\r\n";
        $message .= 'Телефон: ' . $phone. "\r\n";
        $message .= $body."\r\n";

        $headers  = "Content-type: text/html; charset=windows-1251 \r\n";
        $headers .= "From: От кого письмо " . $email . "\r\n";
        $headers .= "Reply-To: " . $to . "\r\n";

        mail($to, $subject, $message, $headers);

        return JsonResponse::create(null, ResponseAlias::HTTP_NO_CONTENT);
    }
}
