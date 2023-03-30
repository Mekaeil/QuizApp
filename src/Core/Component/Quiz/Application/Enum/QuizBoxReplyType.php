<?php

declare(strict_types=1);

namespace QuizApp\Core\Component\Quiz\Application\Enum;

enum QuizBoxReplyType: string
{
    case REALTIME = 'REALTIME';

    case END_OF_THE_EXAM = 'END_OF_THE_EXAM';

    case SEND_VIA_EMAIL = 'SEND_VIA_EMAIL';

    case CUSTOM_CORRECTION_REQUIRED = 'CUSTOM_CORRECTION_REQUIRED';
}
