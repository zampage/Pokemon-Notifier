# Pokemon-Notifier
![botscreen](https://cloud.githubusercontent.com/assets/15847494/18670917/5253eaf2-7f42-11e6-8114-118b6cc551e7.JPG)

This is a Telegram Bot for Pokemon GO.
This bot is controlled via a Webhook, notifications occur in realtime.
Each user can configure which notification for which Pokémon they want.

### Requirements
- [PokemonGo-Map](https://github.com/n30nl1ght/PokemonGo-Map)
- Minimum PHP 5.6
- MySQL/MariaDB
- Telegram Bot API-Key -> [BotFather](https://telegram.me/botfather)

### Install
- Clone repository ```git clone https://github.com/n30nl1ght/Pokemon-Notifier.git```
- Rename ```config.ini.example``` to ```config.ini```
- Edit ```config.ini``` and enter your db details, language and Telegram Bot API-Key.
- Check that the directory ```logs/``` has write rights.
- Define a webhook in your PokemonGo-Map config pointing to your domain, ```https://yourdomain.com/pokeHook.php```.
  HTTPS and a signed and valid SSL certificate are mandatory, these are Telegram API requirements !
- Set your Telegram WebHookURL:
  ```https://api.telegram.org/bot[API-KEY]/setWebhook?url=[URL to your install]/telegramHook.php```.
  As already said, this HAS to be HTTPS and your domain needs a valid SSL certificate.
- To have the bot recognizing you as admin you also need to enter your Telegram ID into the ```config.ini```, to find your your ID do the following, on a Linux Shell for example:
  ```curl -X POST https://api.telegram.org/bot[API-KEY]/getUpdates```

### Bot commands
#### User commands
- /add		= Add Pokémon to your notify list.
- /remove	= Remove Pokémon from your notify list.
- /list		= List Pokémon on your notify list.
- /stop		= Stop notifications [Your configuration remains intact].
- /reset	= Reset notifications to default.
- /start	= Start communication with the bot.
- /iv		= Set minimum IV-Value for a Pokémon you want to be notified about.

#### Admin commands
- /send		= Send a message to all users.
