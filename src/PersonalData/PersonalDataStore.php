<?php namespace EventSourcery\EventSourcery\PersonalData;

interface PersonalDataStore {
    function retrieveData(PersonalKey $personalKey, PersonalDataKey $dataKey): PersonalData;
    function storeData(PersonalKey $personalKey, PersonalDataKey $dataKey, PersonalData $data);
    function removeDataFor(PersonalKey $personalKey);
}