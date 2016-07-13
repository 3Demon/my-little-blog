SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `posts` (
    `id`     INT(11)     NOT NULL AUTO_INCREMENT,
    `author` VARCHAR(64) NOT NULL,
    `time`   timestamp   NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `text`   text        NOT NULL,
    PRIMARY KEY (`id`)
)
    ENGINE = InnoDB
    DEFAULT CHARSET = utf8;

INSERT INTO `posts` (`author`, `text`) VALUES
    ('Me', 'Hello world(2)');
