# Logger

```php
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class VariantTypeNotificationHandler implements MessageHandlerInterface, LoggerAwareInterface
{
    use LoggerAwareTrait;

    private function log(string $message): void
    {
        if ($this->logger) {
            $this->logger->alert($message);
        }
    }
}
```