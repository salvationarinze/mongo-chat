<?php

namespace Musonza\Chat\Facades;

use Illuminate\Support\Facades\Facade;
use Musonza\Chat\Chat as BaseChat;
use Musonza\Chat\Models\Conversation;
use Musonza\Chat\Models\MessageNotification;
use Musonza\Chat\Services\ConversationService;
use Musonza\Chat\Services\MessageService;

/**
 * @method static Conversation createConversation(array $participants, array $data = [])
 * @method static Conversation makeDirect()
 * @method static MessageService message($message)
 * @method static MessageService messages()
 * @method static ConversationService conversation(Conversation $conversation)
 * @method static ConversationService conversations()
 * @method static MessageNotification unReadNotifications()
 * @method static bool broadcasts()
 * @method static bool sentMessageEvent()
 * @method static array|null senderFieldsWhitelist()
 *
 * @see \Musonza\Chat\Chat
 */
class Chat extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     * @codeCoverageIgnore
     */
    protected static function getFacadeAccessor()
    {
        self::clearResolvedInstance(BaseChat::class);

        return BaseChat::class;
    }
}
