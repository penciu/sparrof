<?php

// Configuration parameters that need to be set up correctly (unique to particular setup)

define('CONFIG_DB_CONNECT_STRING', 'mysql:host=sql.inphonepl85.nazwa.pl;port=3307;dbname=inphonepl85_14'); // PDO database connect string (e.g. mysql:host=example.com;dbname=example)
define('CONFIG_DB_USERNAME', 'inphonepl85_14'); // username for database authorization
define('CONFIG_DB_PASSWORD', 'Flensburg1'); // password for database authorization
define('CONFIG_API_SECRET', 'Syrafohet1'); // secret used to verify request signatures (can be any strong password, e.g. [a-zA-Z0-9]{70,})
define('CONFIG_SERVER_SECRET', 'Syrafohet1'); // secret used to encrypt messages before storing them in the database (can be any strong password, e.g. [a-zA-Z0-9]{70,})
define('CONFIG_API_PHONE_NUMBER', '+48732483565'); // phone number that is part of this API for account verification (e.g. your SMS-enabled Twilio phone number)
define('CONFIG_TWILIO_AUTH_CODE', '279636027d895a17a88c6ed3784e7b54'); // secret Twilio API authentication code (get this from your Twilio account online)
define('CONFIG_CLIENT_HASH_SEED', 'Syrafohet1'); // seed used on client-side to hash phone numbers (can be any strong password, e.g. [a-zA-Z0-9]{24,})
define('CONFIG_ENFORCE_SSL', false); // whether to require HTTPS (SSL/TLS) for all requests (should be set to <true> in production environments)

// Configuration parameters that don't necessarily have to be changed (but may be for customization/tuning)

define('CONFIG_API_CLIENTS', serialize(array('Android' => 21))); // a list of valid API clients with their respective minimum software version ID
define('CONFIG_API_LIVE', true); // whether the service is live or down due to maintenance
define('CONFIG_API_DEBUG', true); // whether the API is in debugging mode or not
define('CONFIG_HMAC_ALGORITHM', 'sha256'); // the cryptographic hash algorithm that will be used for HMAC signatures
define('CONFIG_MESSAGES_PER_PAGE', 50); // the number of messages to return per page
define('CONFIG_COMMENTS_PER_PAGE', 100); // the number of comments to return per page
define('CONFIG_ADMIN_USER_IDS', serialize(array())); // a list of user IDs that have administrator privileges
define('CONFIG_CLIENT_HASH_ALGORITHM', 'sha256'); // hash algorithm used on client-side to hash phone numbers
define('CONFIG_CLIENT_HASH_ITERATIONS', 4); // number of hash iterations used on client-side to hash phone numbers
define('CONFIG_FRIEND_COUNT_STEP_SIZE', 3); // the step size to use for the displayed friend count (should not be less than 3) in order to take away some precision and protect users' privacy)
define('CONFIG_MESSAGES_SELF_DESTRUCT_TIMEOUT', 28); // the number of days (>= 1) after which messages are to be wiped automatically
define('CONFIG_THROTTLING_LOGIN_ATTEMPTS', 100); // the maximum number of login attempts per user and day before throttling is activated
define('CONFIG_THROTTLING_LOGIN_HOURS', 12); // the number of hours to throttle a user's login for if throttling has been caused
define('CONFIG_HEADER_SIGNATURE', 'HTTP_X_METHOD_SIGNATURE'); // the HTTP header field that contains the API method signature (HMAC)
define('CONFIG_HEADER_TIMESTAMP', 'HTTP_X_METHOD_TIMESTAMP'); // the HTTP header field that contains the API method timestamp
define('CONFIG_ADMINS_READ_PRIVATE', false); // whether users with administrator privileges may read private conversations for support and anti-abuse purposes
define('CONFIG_NEARBY_RADIUS_KM', 200); // the radius that local messages will be searched within (in kilometers)
define('CONFIG_NEARBY_MAX_AGE', 3600 * 24 * 28); // the maximum age that local messages may have (in seconds) to optimize the range query
