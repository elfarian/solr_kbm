<?php

$options = array
(
    'hostname' => '10.1.232.250',
    'port'     => '6565',
    'path'     => 'latihan'
);

$client = new SolrClient($options);

$doc = new SolrInputDocument();

$doc->addField('id_lokasi', '334455');
$doc->addField('id_obyek', 'Software');
$doc->addField('id', 'Lucene');
$doc->addField('deskripsi', 'latihan solr update data');
$doc->addField('id_obyek_detil', 'Lucene');

// No need to call commit() because $commitWithin is passed, so Solr Server will auto commit within 10 seconds
$updateResponse = $client->addDocument($doc, false, 10000);

print_r($updateResponse->getResponse());

?>
