CREATE TABLE IF NOT EXISTS `posts` (
    `id`     INT         NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `author` VARCHAR(64) NOT NULL,
    `time`   TIMESTAMP   NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `text`   TEXT        NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

INSERT INTO `posts` (`author`, `text`) VALUES ('Me', 'Hello world');
