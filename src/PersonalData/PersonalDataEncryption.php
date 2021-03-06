<?php namespace EventSourcery\EventSourcery\PersonalData;

interface PersonalDataEncryption {
    function encrypt(CryptographicDetails $crypto, PersonalData $data): EncryptedPersonalData;
    function decrypt(CryptographicDetails $crypto, EncryptedPersonalData $data): PersonalData;
}