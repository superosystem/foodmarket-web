CREATE TABLE payment_provider (
    id  varchar(36),
    code    varchar(100) NOT NULL,
    name    varchar(100) NOT NULL,
    primary key (id)
);

ALTER TABLE payment_provider
    ADD CONSTRAINT payment_provider_unique_code unique (code);

CREATE TABLE invoice_type (
    id  varchar(36),
    primary key (id)
);

CREATE TABLE invoice (
    id  varchar(36),
    primary key (id)
);

CREATE TABLE virtual_account (
    id  varchar(36),
    primary key (id)
);

CREATE TABLE payment (
    id  varchar(36),
    primary key (id)
);