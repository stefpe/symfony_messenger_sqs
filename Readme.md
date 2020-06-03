# Symfony Messenger with SQS

This is a Symfony example how to use a AWS SQS Queue to dispatch and consume messages asynchronuously.

## Necessary packages
- symfony/messenger
- sroze/messenger-enqueue-transport
- enqueue/sqs

### Change the ENQUE_DNS env variable


### Dispatch a message
php bin/console app:message:dispatch

### Consume  messages
php bin/console messenger:consume -vv
