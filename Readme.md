# Symfony Messenger with SQS and SNS

This is a Symfony example how to use a AWS SQS Queue to dispatch and consume messages async.
One consumption handler sends SNS messages that can be published everywhere, depending on your subscriptions.

## Necessary packages
- symfony/messenger
- sroze/messenger-enqueue-transport
- enqueue/sqs

### ENV variables
- AWS_KEY
- AWS_SECRET
- AWS_REGION
- AWS_TOKEN
- AWS_TOPIC_ARN

### Dispatch a message
php bin/console app:message:dispatch

### Consume  messages
php bin/console messenger:consume -vv

